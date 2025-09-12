<?php

namespace App\Providers;

use Illuminate\Support\Facades\View; // Import View facade
use Illuminate\Support\ServiceProvider;
use App\Models\TeamMember; // Import your TeamMember model

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share the $teamMembers variable with a specific partial
        View::composer('layouts.partials.teamComponent', function ($view) {
            // Fetch your team members. Adjust the query as needed.
            // Example: Order by name, only show active members.
            $teamMembers = TeamMember::where('is_active', true)
                                       ->orderBy('order')
                                       ->get();

            // Pass the variable to the partial
            $view->with('teamMembers', $teamMembers);
        });
    }
}