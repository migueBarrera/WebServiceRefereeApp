<?php
/**
 * Created by PhpStorm.
 * User: Migue-w10
 * Date: 18/01/2017
 * Time: 0:05
 */

namespace App;


class Reglacls
{
    public $id;
    public $titulo;
    public $preguntas;
    function __construct($id,$titulo) {
        $this->id = $id;
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getArrayPreguntas()
    {
        return $this->preguntas;
    }

    /**
     * @param mixed $arrayPreguntas
     */
    public function setArrayPreguntas($arrayPreguntas)
    {
        $this->preguntas = $arrayPreguntas;
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