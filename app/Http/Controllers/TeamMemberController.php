<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the team members.
     */
    public function index()
    {
        $teamMembers = TeamMember::ordered()->get();
        return view('admin.team.index', compact('teamMembers'));
    }

    /**
     * Show the form for creating a new team member.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created team member in storage.
     */
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'email' => 'nullable|email',
        'phone' => 'nullable|string|max:20',
        'bio' => 'nullable|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'order' => 'nullable|integer',
        'is_active' => 'sometimes|boolean',
        'social_links' => 'nullable|array',
        'social_links.*' => 'nullable|url'
    ]);

    // Handle photo upload
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('team-photos', 'public');
        $validated['photo'] = $photoPath;
    }

    // Handle is_active checkbox - ensure it's properly set
    $validated['is_active'] = $request->has('is_active');

    // Set default order if not provided
    if (!isset($validated['order'])) {
        $validated['order'] = TeamMember::max('order') + 1;
    }

    TeamMember::create($validated);

    return redirect()->route('team-members.index')->with('success', 'Team member created successfully!');
}

    /**
     * Display the specified team member.
     */
    public function show(TeamMember $teamMember)
    {
        return view('admin.team.show', compact('teamMember'));
    }

    /**
     * Show the form for editing the specified team member.
     */
    public function edit(TeamMember $teamMember)
    {
        // Change this to match your view path if needed
        return view('admin.team.edit', compact('teamMember'));
        // If your view is actually at admin.team-members.edit, use:
        // return view('admin.team-members.edit', compact('teamMember'));
    }

    /**
     * Update the specified team member in storage.
     */
    public function update(Request $request, TeamMember $teamMember)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'bio' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'nullable|integer',
            'is_active' => 'sometimes|boolean',
            'social_links' => 'nullable|array',
            'social_links.*' => 'nullable|url',
            'remove_photo' => 'sometimes|boolean'
        ]);

        // Handle photo removal - fixed logic
        if ($request->has('remove_photo') && $request->boolean('remove_photo')) {
            if ($teamMember->photo && Storage::disk('public')->exists($teamMember->photo)) {
                Storage::disk('public')->delete($teamMember->photo);
            }
            $validated['photo'] = null;
        }
        // Handle new photo upload
        elseif ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($teamMember->photo && Storage::disk('public')->exists($teamMember->photo)) {
                Storage::disk('public')->delete($teamMember->photo);
            }
            
            $photoPath = $request->file('photo')->store('team-photos', 'public');
            $validated['photo'] = $photoPath;
        } else {
            // Keep existing photo unless we're removing it
            if (!($request->has('remove_photo') && $request->boolean('remove_photo'))) {
                $validated['photo'] = $teamMember->photo;
            }
        }

        // Handle is_active checkbox
        $validated['is_active'] = $request->has('is_active');

        $teamMember->update($validated);

        return redirect()->route('team-members.index')->with('success', 'Team member updated successfully!');
    }

    /**
     * Remove the specified team member from storage.
     */
    public function destroy(TeamMember $teamMember)
    {
        // Delete photo if exists
        if ($teamMember->photo && Storage::disk('public')->exists($teamMember->photo)) {
            Storage::disk('public')->delete($teamMember->photo);
        }

        $teamMember->delete();

        return redirect()->route('team-members.index')->with('success', 'Team member deleted successfully!');
    }

    /**
     * Update display order via AJAX (optional)
     */
    public function updateOrder(Request $request)
    {
        $request->validate([
            'order' => 'required|array'
        ]);

        foreach ($request->order as $index => $id) {
            TeamMember::where('id', $id)->update(['order' => $index + 1]);
        }

        return response()->json(['success' => true]);
    }
}