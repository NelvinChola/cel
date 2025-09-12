<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class HomeController extends Controller
{


public function index()
{
        // Fetch the clients. Use ->get() to execute the query.
        $clients = Client::all(); 

        // You can also add more specific queries:
        // $clients = Client::orderBy('name')->get();
        // $clients = Client::where('is_active', true)->get();
        // $clients = Client::select('id', 'name', 'logo')->get();

        // Pass the $clients variable to the view
        return view('cel1.landingPage', compact('clients'));
}
}
