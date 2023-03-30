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

    // method that shows john's data on the form
    public function show($qrcode = 0)
    {
        $john = John::find(1);
        
        return view ('generate', compact('john','qrcode'));
    }

    // update john's data for the QR code redirect page
    public function generate(Request $request)
    {
        DB::table('johns')
            ->where('id', 1)
            ->update(['nome' => $request->nome, 'linkedin' => $request->linkedin , 'github' => $request->github]);
        
        return redirect()->route('generate.show', ['qrcode' => 'ok']);
    }

}
