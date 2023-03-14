<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        //$businesses = Business::all();

        //$businesses = Business::where('email', 'padberg.reba@example.net')->where('name', 'Heidenreich LLC')->first();
        
        // ------ CREATE ------*/

        $businesses = Business::create([
            'name' => 'joao',
            'email' => 'joao@gmail.com',
            'address' => 'Pequi'
        ]);
        
        /* ------ UPDATES ------ */

        // $input = [
        //     'name' => 'mario',
        //     'email' => 'mario@gmail.com'
        // ];

        // $businesses = Business::find(3);
        // $businesses->fill($input);
        // $businesses->save();

        // $businesses = Business::find(3)->update([
        //     'name' => 'Gustavo',
        //     'email' => 'gusta@gmail.com'
        // ]);

        // $businesses->name = 'Gustavo Ferreira Dos Santos';
        // $businesses->email = 'gustard@gmail.com';
        // $businesses->address = 'R: belmonte pequi';
        // $businesses->save();

        /* ------ DELETE------ */

        //$businesses = Business::find(2);
        //$businesses->delete();

        
        dd($businesses->toArray());
    }
}
