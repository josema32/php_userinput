<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            //echo "This page is " . $_SERVER['SCRIPT_NAME'] . "<br/>";
            //echo "The page is running on " . $_SERVER['SERVER_SOFTWARE'] . "<br/>";
            //echo "The server uses the " . $_SERVER['SERVER_PROTOCOL'] . "<br/>";
        ?>
        <form method="post" action="myform.php">
            <input type="radio" name="salutation" id="salutation" value="Dr" checked="checked"/>Dr. 
            <input type="radio" name="salutation" id="salutation" value="Mr"/>Mr.
            <input type="radio" name="salutation" id="salutation" value="Ms"/>Ms.<br/>
            First name: <input type="text" name="fname" id="fname" size="16"
                         maxlength="16"/><br/>
            Last name: <input type="text" name="lname" id="lname" size="16"
                         maxlength="16"/><br/>
            Company: <input type="text" name="company" id="company" size="50"
                         maxlength="50"/><br/>
            Street: <input type="text" name="street" id="street" size="40"
                         maxlength="40"/><br/>
            City: <input type="text" name="city" id="city" size="40"
                         maxlength="40"/><br/>
            State:
                <select name="state" id="state">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA" selected="selected">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select><br/>
            Zip: <input type="text" name="zip" id="zip" size="10" maxlength="10"/><br/>
            <input type="checkbox" name="student" id="student" checked="checked"/> 
                  Are you a current LCCC student<br/>
            
            <input type="submit" value="Send my info"/><br/>
        </form>
    </body>
</html>
