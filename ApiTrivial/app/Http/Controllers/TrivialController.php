<?php
/**
 * Created by PhpStorm.
 * User: Migue-w10
 * Date: 18/01/2017
 * Time: 0:28
 */

namespace App\Http\Controllers;
use App\Trivialcls;
use App\Reglacls;
use App\Preguntacls;
use App\Respuestacls;
use Illuminate\Support\Facades\DB;


class TrivialController
{
    function trivialReglas(){
        //Obtenemos el trivial
        $trivialBD = DB::table('trivials')->first();
        $trivial = new trivialcls($trivialBD->id,$trivialBD->version,$trivialBD->descripcion,$trivialBD->descripcion);

        //Obtenemos las reglas
        $reglasBD = DB::table('reglas')->where('trivial_id','=',$trivial->id)->get();
        $arrayreglas = array();
        foreach ($reglasBD as $regla){
            $reglacls = new Reglacls($regla->id,$regla->titulo);
            $preguntasBD = DB::table('preguntas')->where('regla_id','=',$reglacls->id)->get();

            $arrayPreguntas = array();
            foreach ($preguntasBD as $pregunta){
                $preguntacls = new Preguntacls($pregunta->id,$pregunta->regla_id,$pregunta->pregunta,$pregunta->anotacion);
                $respuestaBD = DB::table('respuestas')->where('pregunta_id','=',$preguntacls->id)->get();

                $arrayRespuesta = array();
                foreach ($respuestaBD as $respuesta){
                    $res = new Respuestacls($respuesta->id,$respuesta->pregunta_id,$respuesta->contenido,$respuesta->correcta);
                    array_push($arrayRespuesta,$res);
                }
                $preguntacls->setRespuestas($arrayRespuesta);
                array_push($arrayPreguntas,$preguntacls);
            }
            $reglacls->setArrayPreguntas($arrayPreguntas);
            array_push($arrayreglas,$reglacls);
        }

        $trivial->setReglas($arrayreglas);

        return response()->json($trivial);
    }
    function trivial(){

       $trivial =  DB::table('trivials')->get();
        return  response()->json($trivial);
    }
}