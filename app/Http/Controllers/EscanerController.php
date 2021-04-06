<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Articulo;
use App\Models\Color;
use App\Models\Talla;
use App\Models\nuevo_registros;
use Illuminate\Support\Facades\Auth;

class EscanerController extends Controller
{
    public function vista_escaner(){

        return view('stockblades.escaner');        
    }

    public function vista_escaneado(int $code){

        $tabla=Articulo::join('stock','articulos.id_art','=','stock.id_art')
                            ->join('colores','colores.id_color','=','stock.id_color')
                            ->join('tallas','tallas.id_talla','=','stock.id_talla')
                            ->where('stock.id_art','=',$code)
                            ->get();
                            


        return view('stockblades.escaneado',[
            'valores'=>$tabla,
            'code'=>$code,  
        ]);
    }

    public function insertarRecuento2($id_stock,$id_art,$color,$talla){
        $insercion=0;  
        
        $tablas=Articulo::join('stock','articulos.id_art','=','stock.id_art')
        ->join('colores','colores.id_color','=','stock.id_color')
        ->join('tallas','tallas.id_talla','=','stock.id_talla')
        ->where('stock.id_art','=',$id_art)
        ->get();
       
        $recuento=nuevo_registros::insert([
                          'id_stock'=>$id_stock,
                          'id_art'=>$id_art,
                          'color'=>$color,
                          'talla'=>$talla,
                          'unidades_nuevas'=>$_GET['recuento'],
                ]);
        if($recuento){
            $insercion=1;
        }else{
            $insercion=0;
        }
        return view('stockblades.escaneado',[
            'code'=>$id_art,
            'insercion'=>$insercion,
            'valores'=>$tablas,
        ]);

    }         

    public function insertar_articulo($codigo){
        return view('stockblades.insert_art',[
            'codigo'=>$codigo,
        ]);
    }

    public function insercion_articulo($codigo){  

        $insert=Articulo::insert([
                          'id_art'=>$codigo,
                          'descripcionarticulo'=>$_GET['nombre'],
                          'precio'=>$_GET['precio'],
                          'id'=>Auth::id(),
                ]);
        $insercion=0;
        if($insert){
            $insercion=1;
        }else{
            $insercion=0;
        }
        return view('stockblades.escaner',[
            'insercion'=>$insercion,
        ]);

    }   

}
