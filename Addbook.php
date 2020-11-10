<?php
if(!isset($_COOKIE['user_Name'])){
    header("Location: Login.php");
}
echo "Books";
?>
<html>
<head>

</head>
<body>
<table>
    <tr>
        <td>Book Name:</td>
    </tr>
    <tr>
        <td><textarea rows="3" cols="10" ></textarea></td>
    </tr>
    <tr>
        <td>Publisher:</td>
    </tr>
    <tr>
        <td><input type="text" width="5"></textarea></td>
    </tr>
    <tr>
        <td>Edition:</td>
    </tr>
    <tr>
        <td><input type="text" width="5"></textarea></td>
    </tr>
    <tr>
        <td>ISBN:</td>
    </tr>
    <tr>
        <td><input type="text" width="5"></textarea></td>
    </tr>
    <tr>
        <td>Pages:</td>
    </tr>
    <tr>
        <td><input type="text" width="5"></textarea></td>
    </tr>
    <tr>
        <td>Price:</td>
    </tr>
    <tr>
        <td><input type="text" width="5"></textarea></td>
    </tr>
</table>
</body>
</html>
