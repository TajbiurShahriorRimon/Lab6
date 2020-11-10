<?php

if(isset($_POST['login'])) {
    $xmlLoad = simplexml_load_file("admins.xml");

    $name = $_POST['user_Name'];
    $pass = $_POST['password'];
    foreach ($xmlLoad as $xmlRoot) {
        if ($name == $xmlRoot->userName && $pass == $xmlRoot->password){
            echo "Logged in";

            setcookie('user_Name', $name, time()+20);
            header("Location: Dashboard.php");
            break;
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
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="logIn">
    <table>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="user_Name" placeholder="User Name"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Password"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="login" value="LOG IN">
            </td>
        </tr>
        <tr></tr>
        <tr>
            <td></td>
            <td>
                <a href="Registration.php">Create an account</a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
