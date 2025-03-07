<?php

namespace App\Http\Controllers;

use App\Models\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $requests = Requests::all();

        return view('dashboard', compact('requests'));
    }
}