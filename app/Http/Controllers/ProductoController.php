<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Fruta;

class ProductoController extends Controller
{
    public function buscarFruta() {
        {
            $frutas = Fruta::all();
            return view('cliente_externo_views\crearsolicitud', array('frutas' => $frutas));
        }
    }
}
