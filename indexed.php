<?php


class Car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " .$this->color. " " . $this->Model . "!";
    }
}

$myCar = new Car("black", "Volov");
echo $myCar -> message();
$myCar = new Car("red", "Toyota");
echo $myCar -> message()















?>
    