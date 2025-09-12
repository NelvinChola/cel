<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the clients.
     */
    public function index()
    {
        $clients = Client::latest()->get(); // Get all clients, latest first
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new client.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created client in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle logo file upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $validated['logo'] = $logoPath;
        }

        Client::create($validated);

        return redirect()->route('clients.index')->with('success', 'Client created successfully!');
    }

    /**
     * Display the specified client.
     */
    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified client.
     */
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified client in storage.
     */
  /**
 * Update the specified client in storage.
 */
public function update(Request $request, Client $client)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'remove_logo' => 'sometimes|accepted' // Use 'accepted' for checkboxes
    ]);

    // Handle logo removal or update
    $this->handleLogoUpdate($request, $client, $validated);

    $client->update($validated);

    return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
}

/**
 * Handle the logo update logic.
 */
protected function handleLogoUpdate(Request $request, Client $client, array &$validated)
{
    // If remove_logo checkbox is checked
    if ($request->has('remove_logo') && $request->boolean('remove_logo')) {
        $this->deleteLogoFile($client->logo);
        $validated['logo'] = null;
        return;
    }

    // If a new logo file is uploaded
    if ($request->hasFile('logo')) {
        // Delete old logo first
        $this->deleteLogoFile($client->logo);
        
        // Store new logo
        $logoPath = $request->file('logo')->store('logos', 'public');
        $validated['logo'] = $logoPath;
        return;
    }

    // If neither removal nor new file - keep existing logo
    $validated['logo'] = $client->logo;
}

/**
 * Delete logo file from storage if it exists.
 */
protected function deleteLogoFile(?string $logoPath)
{
    if ($logoPath && Storage::disk('public')->exists($logoPath)) {
        Storage::disk('public')->delete($logoPath);
    }
}

    /**
     * Remove the specified client from storage.
     */
    public function destroy(Client $client)
    {
        // Delete the associated logo file if it exists
        if ($client->logo && Storage::disk('public')->exists($client->logo)) {
            Storage::disk('public')->delete($client->logo);
        }

        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully!');
    }
}