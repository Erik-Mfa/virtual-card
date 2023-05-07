<?php

namespace App\Http\Controllers;

use App\Models\John;
use Illuminate\Http\Request;

class JohnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //method that shows data on john page
    public function show()
    {
        $john = John::find(1);

        return view ('john', compact('john'));
    }

}
