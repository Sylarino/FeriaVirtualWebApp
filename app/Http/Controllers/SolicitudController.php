<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Solicitud;
use App\pedido;
use App\pedido_fruta;

use App;

class SolicitudController extends Controller
{

    public function crearSolicitud(Request $request) {

        //Validación de que campos no esten vacíos.
        $this->validate($request,[
            'fruta' => 'required',
            'cantidad' => 'required|Integer|Min:5|Max:7000'
        ]);
        
        $cons = 1;
        //Validación de Combobox agregados.
        if ($request->input('fruta_' . $cons) !== null) {
            do {
                $this->validate($request, [
                    'fruta_' . $cons => 'required',
                    'cantidad_' . $cons => 'required|Integer|Min:5|Max:7000'
                ]);
                $cons = $cons + 1;
            } while (($request->input('fruta_' . $cons))!== null);
        };

        ///Insercción de los datos
        $solicitud = new pedido();
        $solicitud->id_cliente = 1; 
        $solicitud->direccion = "Juan Osorio";
        $solicitud->activo = 1;

        $solicitud->save();
        $soliid = $solicitud->id;

        $solicitud_fruta = DB::table('pedido_frutas')->insert(array(
            'fruta_id' => $request->input('fruta'),
            'pedido_id' => $soliid,
            'cantidad' => $request->input('cantidad')
        ));
        
        $cons = 1;

        //Validación de número de combobox agregados en la solicitud, antes de agregarlos a la base de datos

        if ($request->input('fruta_' . $cons) !== null) {
            do {
                $solicitud_fruta = DB::table('pedido_frutas')->insert(array(
                    'fruta_id' => $request->input('fruta_' . $cons),
                    'pedido_id' => $soliid,
                    'cantidad' => $request->input('cantidad_' . $cons)
                ));
                $cons = $cons + 1;
            } while (($request->input('fruta_' . $cons))!== null);
        };
        /// Fin insercción de datos

        return back()->with('mensaje', '¡Solicitud registrada exitosamente!');

    }
}
