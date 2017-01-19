<?php
/**
 * Created by PhpStorm.
 * User: Migue-w10
 * Date: 18/01/2017
 * Time: 0:06
 */

namespace App;


class Preguntacls
{
    public $id;
    public $regla_id;
    public $contenido;
    public $anotacion;
    public $respuestas;

    /**
     * @return mixed
     */
    public function getRespuestas()
    {
        return $this->respuestas;
    }

    /**
     * @param mixed $respuestas
     */
    public function setRespuestas($respuestas)
    {
        $this->respuestas = $respuestas;
    }

    function __construct($id,$regla_id,$contenido,$anotacion) {
        $this->id = $id;
        $this->regla_id= $regla_id;
        $this->contenido = $contenido;
        $this->anotacion = $anotacion;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getReglaId()
    {
        return $this->regla_id;
    }

    /**
     * @param mixed $regla_id
     */
    public function setReglaId($regla_id)
    {
        $this->regla_id = $regla_id;
    }

    /**
     * @return mixed
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * @param mixed $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }
}