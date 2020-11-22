<?php
$err_name = "";
$err_username = "";
$err_pass = "";
$err_confPass = "";
$err_email = "";
$err_contact = '';
$err_gender = '';
$err_city = '';
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
    elseif (empty($_POST['contact'])){
        $err_contact = "Phone number is required.";
        $has_error = true;
    }
    /*if (!$has_error) {
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

            $root->appendChild($newElement);

            $xmldoc->save('admins.xml');
        }
    }*/

    if(!$has_error){
        $xmldoc = new DomDocument();
        $xmldoc->formatOutput = true;

        $xmlLoad = simplexml_load_file("admins.xml");

        $book = $xmlLoad->addChild("user");

        $book->addChild("fullname", $name);
        $book->addChild("username", $username);
        $book->addChild("password", $password);
        $book->addChild("gender", $gender);
        $book->addChild("email", $email);
        $book->addChild("contactNum", $contact);
        $book->addChild("city", $city);

        $xmlLoad->saveXML("admins.xml");
    }

}
?>
