<?php
include 'PHPReg.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
    <legend>
        <h1>Registration</h1>
    </legend>
    <form action="Registration.php" method="post">
        <table>
            <tr>
                <td align="right">Full Name:</td>
                <td><input type="text" name="name">
                    <?php
                    echo $err_name;
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">
                    Username:</td>
                <td><input type="text" name="username">
                    <?php
                    echo $err_username;
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">Password:</td>
                <td><input type="password" name="pass">
                    <?php
                    echo $err_pass;
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">
                    Confirm Password:</td>
                <td><input type="password" name="conf_pass">
                    <?php
                    echo $err_confPass;
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">
                    Gender
                </td>
                <td>
                    <input type="radio" name="gender" value="Male"/> Male
                    <input type="radio" name="gender" value="Female"/> Female
                    <?php
                    echo $err_gender;
                    ?>
                </td>
            </tr>
            <tr>
                <td align="right">
                    Email:</td>
                <td><input type="text" name="email">
                    <?php
                    echo $err_email;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Contact No.:</td>
                <td>
                    <input type="text" name="contact" >
                    <?php
                    echo $err_contact;
                    ?>
                </td>
            </tr>

            <tr>
                <td>City:</td>
                <td>
                    <select name="city">
                        <option name="dhaka" value="dhaka">dhaka</option>
                        <option name="jessore" value="jessore">Jessore</option>
                        <option name="khulna" value="khulna">Khulna</option>
                        <?php
                        echo $err_city;
                        ?>
                    </select>
                </td>
            </tr>

            <tr align="center">
                <td colspan="2"><input type="submit" value="register" name="register"></td>
            </tr>

        </table>
    </form>
</fieldset>
</body>
</html>