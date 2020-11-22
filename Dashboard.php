<?php
/*if(!isset($_COOKIE['user_Name'])){
    header("Location: Login.php");
}*/
echo "hello user: ";
if(isset($_POST['login'])) {
    if($fileCheck = file_get_contents("books.xml")){
        echo "no data";
    }
    $xmlLoad = simplexml_load_file("sample.xml");

    $name = $_POST['user_Name'];
    $pass = $_POST['password'];
    foreach ($xmlLoad as $xmlRoot) {
        if ($name == $xmlRoot->userName && $pass == $xmlRoot->password){
            echo "Logged in";
            break;
        }
    }
}
//echo $_COOKIE['user_Name'];
?>
<html>
<head>
    <style>
        body{
            background-image: url('resources/img07.jpg');
            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>
<body>
<table border="2">
    <tr>
        <td>
            <a href="Addbook.php">Add Book</a>
        </td>
    </tr>
    <tr>
        <td>sr.no</td>
        <td>name</td>
        <td>publisher</td>
        <td>isbn</td>
        <td>price</td>
        <td>image</td>
        <td>delete</td>
    </tr>

    <?php
    $xmlLoad = simplexml_load_file("books.xml");
    $i = 1;
    foreach ($xmlLoad as $xmlRoot){
        echo "<tr>
                    <td>
                        $i
                    </td>
                    <td>
                        $xmlRoot->name
                    </td>
                    <td>
                        $xmlRoot->publisher
                    </td>
                    <td>
                        $xmlRoot->isbn
                    </td>
                    <td>
                        $xmlRoot->price
                    </td>
                    <td>
                        <img src='$xmlRoot->image' height='25' width='25'>
                    </td>
                    <td>
                        <img src='$xmlRoot->delete' height='25' width='25'>
                    </td>
             </tr>
                ";
        $i++;
    }
    ?>
</table>
</body>
</html>