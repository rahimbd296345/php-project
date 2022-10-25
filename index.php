<?php
      include("include/header.php");
?>

<?php
echo '<h1>Now Learning PHP Conditional Assignment Operators:</h1>';
echo "<br>";



echo $status = (empty($user)) ? "anonymous" : "Logged in";

echo ("<br>");
$user = "Abdur Rahim";

echo $status = (empty($user)) ? "anonymous": "logged in";

echo ("<br>");



echo $user = $_GET['user']?? 'anonymous';
echo ('<br>');

echo $color = $color ?? "red";




















?>























































































<?php
      include("include/footer.php");
?>