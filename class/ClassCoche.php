<?php
/* incializamos nuestra class */
class Coche{
    /* declaracion de variables publicas para objetos */
    public $color;
    public $velocidad;
    public $carburante;
    /* declaracion de variables publicas para funciones */
    public $colorfun = 'rojo';
    public $velofun = 120;
    public $marcafun = 'honda';

    /* declaracion de metodos(funciones) */
    public function getColor(){
        //declaramos el contenido de la funcion
        return $this->colorfun;
    }
    public function getVelocidad(){
        //declaramos el contenido de la funcion
        return $this->velofun;
    }
    public function getMarca(){
        //declaramos el contenido de la funcion
        return $this->marcafun;
    }

    public function elCochceElegidoEselMasRapido($cocheElegido){
        return $cocheElegido->velocidad > $this->velocidad;
    }
}

/* declaracion de objeto */
$miCoche = new Coche();// objeto
$miCoche->color = 'rojo';
$miCoche->velocidad = 120;
$miCoche->marca = 'ferrari';
/* declaro mi segundo objeto */
$otroCoche = new Coche();// objeto
$otroCoche->color = 'azul';
$otroCoche->velocidad = 1330;
$otroCoche->marca = 'audi';


?>