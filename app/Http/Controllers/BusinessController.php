<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        //$businesses = Business::all();
        //$businesses = Business::find(1);
        //$businesses = Business::where('email', 'padberg.reba@example.net')->where('name', 'Heidenreich LLC')->first();
        $businesses = Business::create([
            'name' => 'Gustavo',
            'email' => 'gusta@gmail.com',
            'address' => 'Dinah Borges'
        ]);
        
        dd($businesses);
    }
}
