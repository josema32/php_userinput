<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User Input</title>
    </head>
    <body>
        <p>Your information:<p>
        <?php
            //var_dump($_SERVER) . "<br/>";
            if (isset($_POST['student']))
            {
                $student="Yes";
            }
            else 
            {
                $student="No";
            }
            echo $_POST['salutation']." ".$_POST['fname']." ". $_POST['lname'] . "<br/>";
            echo $_POST['company'] . "<br/>";
            echo $_POST['street'] . "<br/>";
            echo $_POST['city'] . ", ". $_POST['state'] . " " . $_POST['zip'] . "<br/>";
            echo "LCCC Student? ". $student . "<br/>";
            
        ?>
    </body>
</html>
