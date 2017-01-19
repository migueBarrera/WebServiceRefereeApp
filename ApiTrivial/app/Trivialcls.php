<?php
/**
 * Created by PhpStorm.
 * User: Migue-w10
 * Date: 18/01/2017
 * Time: 0:04
 */

namespace App;


class Trivialcls
{
    public $id;
    public $version;
    public $idioma;
    public $descripcion;
    public $reglas;

    function __construct($id,$version,$idioma,$descripcion)
    {
        $this->id=$id;
        $this->version=$version;
        $this->idioma=$idioma;
        $this->descripcion=$descripcion;
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
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * @param mixed $idioma
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;
    }

    /**
     * @return mixed
     */
    public function getReglas()
    {
        return $this->reglas;
    }

    /**
     * @param mixed $reglas
     */
    public function setReglas($reglas)
    {
        $this->reglas = $reglas;
    }
}