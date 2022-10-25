<?php
      include("include/header.php");
?>

<?php
echo '<h1>PHP - The if...elseif...else Statement:..</h1>';
echo "<br>";



$t = date('H');
echo "<p>The hour (of the server) is " . $t;
echo ", and will give the following message:</p>";

if ($t < '10'){
      echo 'Have a good morning!';
} elseif ($t < '18'){
      echo "Have a good day!";
} else {
      echo "Have a good night";
}

















?>























































































<?php
      include("include/footer.php");
?>