<?php

/*
Escriu un programa que defineixi una classe Shape 
amb un constructor que rebi com a paràmetres 
l'ample i alt. Defineix dues subclasses; 
Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
*/

class Shape {

    public $ancho;
    public $alto;



//contructor
    function __construct($ancho, $alto) { 

    $this->ancho = $ancho;
    $this->alto = $alto;
    }
}
// subclases 
class Triangulo extends Shape {

    public function areaT() {
        return $this->ancho * $this-> alto /2;
    }

}

class Rectangulo extends Shape {

    public function areaR() {
        return ($this ->ancho * $this -> alto);
    }

}

$triangulo1 = new Triangulo(5,8);
$rectangulo1 = new Rectangulo(12,20);

echo "Area del triangulo es ; " .  $triangulo1 -> areaT();
echo "</br>";
echo "Area del rectangulo es ; " .  $rectangulo1 -> areaR();



?>