<?php

namespace App\Http\Controllers;

use App\Models\Sobre;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    
    public function sobre()
    {
     return view('sobre.sobre');
    }

}
