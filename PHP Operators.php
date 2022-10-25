<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 6;

echo $x - $y;
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 6;

echo $x * $y;
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 6;

echo $x % $y;
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
$y = 3;

echo $x ** $y;
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;  
echo $x;
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 20;  
$x += 100;

echo $x;
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>  

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
$x = 100;
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>

</body>
</html>

