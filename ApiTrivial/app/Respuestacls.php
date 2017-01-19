<?php
/**
 * Created by PhpStorm.
 * User: Migue-w10
 * Date: 18/01/2017
 * Time: 0:06
 */

namespace App;


class Respuestacls
{
    public $id;
    public $pregunta_id;
    public $contenido;
    public $correcta;
    function __construct($id,$pregunta_id,$contenido,$correcta) {
        $this->id = $id;
        $this->pregunta_id = $pregunta_id;
        $this->contenido = $contenido;
        $this->correcta=$correcta;
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
    public function getPreguntaId()
    {
        return $this->pregunta_id;
    }

    /**
     * @param mixed $pregunta_id
     */
    public function setPreguntaId($pregunta_id)
    {
        $this->pregunta_id = $pregunta_id;
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