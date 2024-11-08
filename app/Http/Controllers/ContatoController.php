<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function contato()
    {
        return view('contato.contato');
    }

}
