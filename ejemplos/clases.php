<?php


class Persona
{
    protected $nombre;
    protected $edad;

    public static $cont;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        //echo toString();
        //echo esMayor();
        echo "Persona instanciada !<br>";
    }

    // GETTERs
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }

    // MÉTODOS :

    public function toString() {
        return "<br>$this->nombre tiene $this->edad años<br>" . $this->check();
    }

    public function check(){
        if($this->esMayor())
            return '&#9989Mayor <strike>Menor</strike> de edad';
        else
            return '<strike>&#10060Mayor</strike> Menor de edad';
    }

    public function esMayor() {

        if ($this->edad > 18) return true;

        else return false;

    }

} // fin de clase











class Tarea{
    public $descripcion;
    public $realizada = false;

    public function setRealizada(){
        $this->realizada = true;
    }
    public function toString(){
        if($this->realizada) return "<strike>$this->descripcion</strike>";
        else return $this->descripcion;
    }
}


/*$personas = [
    new Persona('Andres', 29),
    new Persona('Pepe', 10)
];

require 'funciones.php';
foreach( $personas as $i ) {
    mostrarVar($i);
    //echo "$i->nombre tiene $i->edad años<br>";
    echo $i->toString();
    if( $i->esMayor() ) echo "Es mayor de edad";
    else    echo "Es menor de edad";
    echo $i->check();
    echo "<hr>";
}*/



//require '../views/clases.view.php';

