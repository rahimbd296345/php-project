<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = 5; // global scope

        function myText(){
            // using x inside this function will generate an error
            echo "<p>Variale x inside function is: $x</p>";
        }
        myText()
        echo "<p>Variable x outside function is: $x</p>"
        ?>
    </body>
</html>