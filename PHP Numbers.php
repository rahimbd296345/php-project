<!DOCTYPE html>
<html>
<body>

<?php
// Check if the type of a variable is integer   
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Check again... 
$x = 59.85;
var_dump(is_int($x));
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));
?>  

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
// Check if a numeric value is finite or infinite 
$x = 1.9e411;
var_dump($x);
?>  

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<?php
// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);
?>  

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>  

</body>
</html>
