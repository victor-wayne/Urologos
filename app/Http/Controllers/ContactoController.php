<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Mail;



class ContactoController extends Controller
{
    public function index(){

        return view('urologos.contacto');
    }

    public function enviarCorreo(Request $request)
    {

        $subject = "Asunto del correo";
        $for = "beto_jpt@hotmail.com";
        Mail::send('urologos.email',$request->all(), function($msj) use($subject,$for){
            $msj->from("iscalbertojimenez22@gmail.com","Contacto Sitio Web");
            $msj->subject($subject);
            $msj->to($for);
        });
        return response()->json([
            'mensaje' => 'Correcto Email de Contacto Enviado',
            'status' => '200',
        ]);
        
     
        

        
    }
}