<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Articulo;
use App\Models\Color;
use App\Models\Talla;
use App\Models\nuevo_registros;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{
    public function articulos_ajax(string $request) {
                

        $articulosFiltro=Articulo::select('descripcionarticulo','stock.id_art')
                                    ->join('stock','articulos.id_art','=','stock.id_art')
                                    ->where('descripcionarticulo', 'like', '%'.$request.'%')
                                    ->where('id','=',Auth::id())
                                    ->groupBy('descripcionarticulo','stock.id_art')
                                    ->get();
        
        $matriz=[];
        foreach($articulosFiltro as $item){
            $matriz[$item->id_art]=$item->descripcionarticulo;
        }

        return response()->json($matriz);
    }

    public function color_ajax(int $articulo) {
        
        $coloresFiltros=Color::join('stock','colores.id_color','=','stock.id_color')      
                                ->where('id_art', '=', $articulo)
                                ->get();

        
        $colores=[];
        foreach($coloresFiltros as $item){
            $colores[$item->id_color]=$item->color;
        }              
        //dd($colores);        
        
        return response()->json($colores);

    
    }

    public function talla_ajax(int $articulo) {

        $tallasFiltros=Talla::join('stock','tallas.id_talla','=','stock.id_talla')
                              ->where('id_art','=',$articulo)
                              ->get();

        $tallas=[];
            foreach($tallasFiltros as $item){
                $tallas[$item->id_talla]=$item->talla;
            }   
        //dd($tallas);     
           
        return response()->json($tallas);

    
    }

    public function recuento(int $articulo, int $color, int $talla) {

            $recuento=stock::select('unidades')
                            ->where('id_art','=',$articulo)
                            ->where('id_color','=',$color)
                            ->where('id_talla','=',$talla)
                            ->get();

            foreach($recuento as $item){
                $cantidad_stock[]=$item->unidades;
            }
        

    
        return response()->json($cantidad_stock);

    }

    public function insertarRecuento($id_art,$id_color,$id_talla,$unidadesnuevas){

        //dd($unidadesnuevas);

        $stock=stock::join('colores','stock.id_color','=','colores.id_color')
                      ->join('tallas','stock.id_talla','=','tallas.id_talla')
                      ->where('stock.id_art','=',$id_art)
                      ->where('stock.id_color','=',$id_color)
                      ->where('stock.id_talla','=',$id_talla)
                      ->get(); 

        foreach($stock as $item){
            $id_stock=$item->id_stock;
            $talla=$item->talla;
            $color=$item->color;
        }        

        $recuento=nuevo_registros::insert([
                        'id_stock'=>$id_stock,
                        'id_art'=>$id_art,
                        'color'=>$color,
                        'talla'=>$talla,
                        'unidades_nuevas'=>$unidadesnuevas,
                ]);
                   

        if($recuento) {
            return response()->json(0);
        }else{
            return response()->json(1);
        }

    }
}
