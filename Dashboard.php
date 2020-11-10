<?php
if(!isset($_COOKIE['user_Name'])){
    header("Location: Login.php");
}
echo "hello user: ";
echo $_COOKIE['user_Name'];
?>
<html>
<head>

</head>
<body>
<h2>sefnsek</h2>
<table>
    <tr>
        <td>
            <h3>hello</h3>
        </td>
    </tr>
</table>
<table>
    <tr>
        <td>lklfs</td>
        <td>
            <a href="Addbook.php">Add Book</a>
        </td>
    </tr>
    <tr>
        <td>sdfs</td>
        <td>fsdf</td>
    </tr>
</table>
</body>
</html>