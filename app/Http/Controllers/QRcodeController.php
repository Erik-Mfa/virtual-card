<?php

namespace App\Http\Controllers;

use App\Models\John;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QRcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        $john = John::find(1);
        
        return view ('generate', compact('john'));
    }

    public function generate(Request $request)
    {
        DB::table('johns')
            ->where('id', 1)
            ->update(['nome' => $request->nome, 'linkedin' => $request->linkedin , 'github' => $request->github]);
        
    }

}
