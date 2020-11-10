<?php
$err_name = "";
$err_username = "";
$err_pass = "";
$err_confPass = "";
$err_email = "";
$err_contact = '';
$err_gender = '';
$name = "";
$username = "";
$password = "";
$confPassword = "";
$email = "";
$gender = "";
$number = "";
$city = '';
$contact = '';
$has_error = false;

if(isset($_POST['register'])) {
    if (empty($_POST['name'])) {
        $err_name = "Full Name cannot be empty!";
    } else {
        $name = htmlspecialchars($_POST['name']);
    }
    if (empty($_POST['username'])) {
        $err_username = "Username cannot be empty!";
        $has_error = true;
    }
    if (!empty($_POST['username'])) {
        if (strlen($_POST['username']) < 6) {
            $err_username = "Username cannot be less than 6 letter";
            $has_error = true;
        } else if (strpos($_POST['username'], " ")) {
            $err_username = "Spaces is not allowed in a sequence";
            $has_error = true;
        } else {
            $username = htmlspecialchars($_POST['username']);
        }
    }
    if (empty($_POST['pass'])) {
        $err_pass = "Password cannot be empty!";
        $has_error = true;
    }
    if (!empty($_POST['pass'])) {
        if (strlen($_POST['pass']) < 8) {
            $err_pass = "Password cannot be less than 8 letter";
            $has_error = true;
        }
        if (!strpos($_POST['pass'], "#") && !strpos($_POST['pass'], "?")) {
            $err_pass = "Password must have a special character";
            $has_error = true;
        }
        if (!strpos($_POST['pass'], "1") && !strpos($_POST['pass'], "2") && !strpos($_POST['pass'], "3") && !strpos($_POST['pass'], "4")
            && !strpos($_POST['pass'], "5") && !strpos($_POST['pass'], "6") && !strpos($_POST['pass'], "7") && !strpos($_POST['pass'], "8")
            && !strpos($_POST['pass'], "9") && !strpos($_POST['pass'], "0")) {
            $err_pass = "Password must have a number";
            $has_error = true;
        }
        if (strtoupper($_POST['pass']) == $_POST['pass']) {
            $err_pass = "Password must have a Lower character";
            $has_error = true;
        }
        if (strtolower($_POST['pass']) == $_POST['pass']) {
            $err_pass = "Password must have a Upper character";
            $has_error = true;
        } else {
            $password = htmlspecialchars($_POST['pass']);
        }
    }
    if (empty($_POST['conf_pass'])) {
        $err_confPass = "Confirm Password cannot be empty!";
        $has_error = true;
    }
    if (empty($_POST['email'])) {
        $err_email = "Email cannot be empty!";
        $has_error = true;
    } else if (!empty($_POST['email'])) {
        if (strpos($_POST['email'], ".") && strpos($_POST['email'], "@")) {
            if (strpos($_POST['email'], ".") > strpos($_POST['email'], "@")) {
                $email = htmlspecialchars($_POST['email']);
            } else {
                $err_email = "@ must be before (.)";
                $has_error = true;
            }
        } else {
            $err_email = "@ and (.) must be included";
            $has_error = true;
        }
    }
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $err_gender = "Gender required";
        $has_error = true;
    }
    if (!empty($_POST['city'])) {
        $city = $_POST['city'];
    } else {
        echo 'Please select the city.';
    }
    if (!empty($_POST['contact'])) {
        if (!is_numeric($_POST['contact'])) {
            $err_contact = "Phone number must be numeric.";
            $has_error = true;
        } else {
            $contact = htmlspecialchars($_POST['contact']);
        }
    }
    if (!$has_error) {
        echo "DONE!!!";

        $xmldoc = new DomDocument();
        $xmldoc->formatOutput = true;

        if ($xml = file_get_contents('admins.xml')) {
            $xmldoc->loadXML($xml);
            $root = $xmldoc->firstChild;

            $newElement = $xmldoc->createElement('user');
//fs-----------
            $newElement = $xmldoc->createElement('fullname');


            $root->appendChild($newElement);


            $idText = $xmldoc->createTextNode($name);


            $newElement->appendChild($idText);


            $nameElement = $xmldoc->createElement('userName');
            $root->appendChild($nameElement);
            $nameText = $xmldoc->createTextNode($username);
            $nameElement->appendChild($nameText);


            $RollnoElement = $xmldoc->createElement('password');
            $root->appendChild($RollnoElement);
            $RollText = $xmldoc->createTextNode($password);
            $RollnoElement->appendChild($RollText);


            $schoolnameElement = $xmldoc->createElement('gender');
            $root->appendChild($schoolnameElement);
            $schoolText = $xmldoc->createTextNode($gender);
            $schoolnameElement->appendChild($schoolText);


            $ageElement = $xmldoc->createElement('email');
            $root->appendChild($ageElement);
            $ageText = $xmldoc->createTextNode($email);
            $ageElement->appendChild($ageText);

            $ageElement = $xmldoc->createElement('contactNum');
            $root->appendChild($ageElement);
            $ageText = $xmldoc->createTextNode($contact);
            $ageElement->appendChild($ageText);

            $ageElement = $xmldoc->createElement('city');
            $root->appendChild($ageElement);
            $ageText = $xmldoc->createTextNode($city);
            $ageElement->appendChild($ageText);

            $newElement = $xmldoc->createElement('user');

            $xmldoc->save('admins.xml');
        }
    }

}
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
                </td>
            </tr>

            <tr>
                <td>City:</td>
                <td>
                    <select name="city">
                        <option name="dhaka" value="dhaka">dhaka</option>
                        <option name="jessore" value="jessore">Jessore</option>
                        <option name="khulna" value="khulna">Khulna</option>
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