<?php

namespace App\Http\Controllers;

use App\Models\John;
use Illuminate\Http\Request;

class JohnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $john = John::find(2);

        return view ('john', compact('john'));
    }

}
