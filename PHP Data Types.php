<!DOCTYPE html>
<html>
<body>

<?php 
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php  
$x = 5985;
var_dump($x);
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php  
$x = 10.365;
var_dump($x);
$x = true;
$y = false;
var_dump($x);
var_dump($y);
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

</body>
</html>
