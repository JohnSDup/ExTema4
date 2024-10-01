<?php

/*
Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize 
que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i 
un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).

*/

class Employee
{
    //atributos
    private $nombre;
    private $sueldo;


    //metodo
    public function initialize() {
        echo $this->nombre;
        echo $this->sueldo;
    }
    public function print (){

        if ($this-> sueldo > 6000) {
            return "Hay que pagar impuestos";
        }else{
            return "No hay que pagar impuestos";
        }
    }
}

$empleado = new Employee("kevin","7000");
echo $empleado -> initialize();
echo $empleado -> print();

?>

