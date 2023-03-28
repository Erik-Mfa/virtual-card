<?php

namespace App\Http\Controllers;

use App\Models\John;
use Illuminate\Http\Request;

class JohnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $john = John::all();
        dd($john);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(John $john)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, John $john)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(John $john)
    {
        //
    }
}
