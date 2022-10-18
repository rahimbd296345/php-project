<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = 50;
        $y = 10;

        function myText(){
            $GLOBALS['y'] = $GLOBALS['x']+$GLOBALS['y'];
        }
        myText();
        echo $y;

        ?>
    </body>
</html>