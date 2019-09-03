<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="get" action="compute.php">
            <p>Enter a number: <input type="number" name="numone" id="numone"
                                      size="5" maxlength="5"/></p>
                    <p><select name="operation" id="operation">
                            <option selected="selected">+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                        </select>
                    </p>
            <p>Enter another number: <input type="number" name="numtwo" id="numtwo"
                                            size="5" maxlength="5"/>
            </p>
                    <p><input type="submit" value="Calculate answer"/></p>
        </form>
        
    </body>
</html>
