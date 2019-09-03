<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $numone=$_GET['numone'];
            $numtwo=$_GET['numtwo'];
            $operation=$_GET['operation'];
            if (is_nan($numone) || is_nan($numtwo))
            {
                echo "<p>Please enter only number.</p>";
                echo "<p><a href=\"calc.php\">Click to try again</a></p>";
            }
            else 
            {
                switch ($operation)
                {
                    case "+":
                        $answer=$numone+$numtwo;
                        echo "<p>$numone+ $numtwo = $answer</p>";
                        break;
                    case "-":
                        $answer=$numone-$numtwo;
                        echo "<p>$numone - $numtwo = $answer</p>";
                        break;
                    case "*":
                        $answer=$numone*$numtwo;
                        echo "<p>$numone * $numtwo = $answer</p>";
                        break;
                    case "/":
                        if ($numtwo == 0)
                        {
                            echo "<p>Sorry, you can't divide by zero.</p>";
                        }
                        else
                        {
                            $answer=$numone/$numtwo;
                            echo "<p>$numone / $numtwo = $answer</p>";
                            break;
                        }
                }
            }
        ?>
        <a href="calc.php">Click to perform another calculation</a>
    </body>
</html>
