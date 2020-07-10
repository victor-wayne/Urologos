<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index(){

        return view('urologos.contacto');
    }

    public function enviarCorreo(Request $request)
    {
        

        return response()->json([
            'mensaje' => 'Correcto',
            'status' => '200',
        ]);

        
    }
}