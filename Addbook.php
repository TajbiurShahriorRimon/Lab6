<?php
if(!isset($_COOKIE['user_Name'])){
    header("Location: Login.php");
}
$err_bookname = "";
$err_category = "";
$err_publisher = "";
$err_edition = "";
$err_description = "";
$err_pages = '';
$err_price = '';
$err_isbn = '';

$bookname = "";
$category = "";
$publisher = "";
$edition = "";
$description = "";
$pages = '';
$price = '';
$isbn = '';
$has_error = false;
if(isset($_POST['addBook'])) {
    if (empty($_POST['book'])) {
        $err_name = "Book Name cannot be empty!";
        $has_error = true;
    } else {
        $bookname = htmlspecialchars($_POST['book']);
    }
    if (empty($_POST['category'])) {
        $err_name = "Category Name cannot be empty!";
        $has_error = true;
    } else {
        $bookname = htmlspecialchars($_POST['category']);
    }
    if (empty($_POST['desc'])) {
        $err_name = "Description cannot be empty!";
        $has_error = true;
    } else {
        $bookname = htmlspecialchars($_POST['desc']);
    }
    if (empty($_POST['pub'])) {
        $err_name = "Publisher Name cannot be empty!";
        $has_error = true;
    } else {
        $bookname = htmlspecialchars($_POST['pub']);
    }
    if (empty($_POST['ed'])) {
        $err_name = "Edition Name cannot be empty!";
        $has_error = true;
    } else {
        $bookname = htmlspecialchars($_POST['ed']);
    }
    if (empty($_POST['isbn'])) {
        $err_name = "Category Name cannot be empty!";
        $has_error = true;
    } else {
        $bookname = htmlspecialchars($_POST['isbn']);
    }
    if (empty($_POST['page'])) {
        $err_name = "Page number cannot be empty!";
        $has_error = true;
    } else {
        $bookname = htmlspecialchars($_POST['page']);
    }
    if (empty($_POST['price'])) {
        $err_name = "Price cannot be empty!";
        $has_error = true;
    } else {
        $bookname = htmlspecialchars($_POST['price']);
    }
    if(!$has_error){
        //insert the data into the xml file
    }
}
//echo "Books";
?>
<html>
<head>

</head>
<body>
<img src="headerlogo1.jpg" width="600" height="200">
<form action="Addbook.php" method="post">
<table>
    <tr>
        <td>Book Name:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="book"></td>
    </tr>
    <tr>
        <td>Category:</td>
    </tr>
    <tr>
        <td>
            <select name="category">
                <option name="Architecture">Architecture</option>
                <option name="Sports">Sports</option>
                <option name="Astrology">Astrology</option>
                <option name="Business">Business</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Description</td>
    </tr>
    <tr>
        <td><textarea rows="3" cols="10" name="desc"></textarea></td>
    </tr>
    <tr>
        <td>Publisher:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="pub"></textarea></td>
    </tr>
    <tr>
        <td>Edition:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="ed"></textarea></td>
    </tr>
    <tr>
        <td>ISBN:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="isbn"></textarea></td>
    </tr>
    <tr>
        <td>Pages:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="page"></textarea></td>
    </tr>
    <tr>
        <td>Price:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="price"></textarea></td>
    </tr>
    <tr>
        <td>
            <input type="submit" name="addBook" value="addBook">
        </td>
    </tr>
</table>
</form>
</body>
</html>
