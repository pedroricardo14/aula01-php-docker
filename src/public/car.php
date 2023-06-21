<?php 

class Car {
    // Atributos
    public $marca = "";
    public $modelo = "";
    public $cor = "";
    public $placa = "";

    // Método ligar
    function ligar() {
        echo "O carro está ligado\n";
    }
    // Método desligar
    function desligar() {
        echo "O carro está desligado\n";
    }
    // Método acelerar
    function accelerar() {
        echo "O carro ecelera\n";
    }
}

$car1 = new Car();
$car2 = new Car();

$car1->marca = "Tesla ";
$car1->modelo = "Roadster ";
$car1->cor = "Vermelho ";
$car1->placa = "MARTE01 ";

$car2->marca = "Volkswagen ";
$car2->modelo = "Fusca ";
$car2->cor = "Azul ";
$car2->placa = "HERBIE53 ";

echo $car1->marca; // Saída: Tesla
echo $car2->marca; //Saída: Volkswagen 

$car1->desligar(); 
$car2->accelerar(); 


class Pessoa {

    // Método construtor
    function construtor() {
        echo 'Um objeto foi criado <br /> ';
    }

}
    $p1 = new Pessoa();

    $p2 = new Pessoa();

?>