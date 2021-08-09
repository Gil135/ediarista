<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
   public function store(Request $request)
   {
    $request->validate([
        "curso"=>['required','max:20'],
        "carga"=>['required','integer']
    ]);
       dd('Dados validado e enviado');
   }
}
