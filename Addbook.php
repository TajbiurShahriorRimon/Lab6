<?php
/*if(!isset($_COOKIE['user_Name'])){
    header("Location: Login.php");
}*/
include_once 'PHPBook.php';
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
        <td><input type="text" width="5" name="book">
            <?php
            echo $err_bookname;
            ?>
        </td>
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
            <?php
            echo $err_category;
            ?>
        </td>
    </tr>
    <tr>
        <td>Description</td>
    </tr>
    <tr>
        <td>
            <textarea rows="3" cols="10" name="desc"></textarea>
            <?php
            echo $err_description;
            ?>
        </td>

    </tr>
    <tr>
        <td>Publisher:</td>
    </tr>
    <tr>
        <td>
            <input type="text" width="5" name="pub">
            <?php
            echo $err_publisher;
            ?>
        </td>
    </tr>
    <tr>
        <td>Edition:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="ed">
            <?php
            echo $err_edition;
            ?>
        </td>
    </tr>
    <tr>
        <td>ISBN:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="isbn">
            <?php
            echo $err_isbn;
            ?>
        </td>
    </tr>
    <tr>
        <td>Pages:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="page">
            <?php
            echo $err_pages;
            ?>
        </td>
    </tr>
    <tr>
        <td>Price:</td>
    </tr>
    <tr>
        <td><input type="text" width="5" name="price">
            <?php
            echo $err_price;
            ?>
        </td>
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
