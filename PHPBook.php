<?php

$err_bookname = '';
$err_category = '';
$err_publisher = '';
$err_edition = '';
$err_description = '';
$err_pages = '';
$err_price = '';
$err_isbn = '';

$bookname = '';
$category = '';
$publisher = '';
$edition = '';
$description = '';
$pages = '';
$price = '';
$isbn = '';
$has_error = false;
if(isset($_POST['addBook'])) {
    if (empty($_POST['book'])) {
        $err_bookname = "Book Name cannot be empty!";
        $has_error = true;
    } else {
        $bookname = htmlspecialchars($_POST['book']);
    }
    if (empty($_POST['category'])) {
        $err_category = "Category Name cannot be empty!";
        $has_error = true;
    } else {
        $category = htmlspecialchars($_POST['category']);
    }
    if (empty($_POST['desc'])) {
        $err_description = "Description cannot be empty!";
        $has_error = true;
    } else {
        $description = htmlspecialchars($_POST['desc']);
    }
    if (empty($_POST['pub'])) {
        $err_publisher = "Publisher Name cannot be empty!";
        $has_error = true;
    } else {
        $publisher = htmlspecialchars($_POST['pub']);
    }
    if (empty($_POST['ed'])) {
        $err_edition = "Edition Name cannot be empty!";
        $has_error = true;
    } else {
        $edition = htmlspecialchars($_POST['ed']);
    }
    if (empty($_POST['isbn'])) {
        $err_isbn = "Category Name cannot be empty!";
        $has_error = true;
    } else {
        $isbn = htmlspecialchars($_POST['isbn']);
    }
    if (empty($_POST['page'])) {
        $err_pages = "Page number cannot be empty!";
        $has_error = true;
    } else {
        $pages = htmlspecialchars($_POST['page']);
    }
    if (empty($_POST['price'])) {
        $err_price = "Price cannot be empty!";
        $has_error = true;
    } else {
        $price = htmlspecialchars($_POST['price']);
    }
    if(!$has_error){
        //insert the data into the xml file

        $xml = new DOMDocument("1.0");
        //$xml->preserveWhiteSpace = false;
        $xml->formatOutput = true;

        $xmlLoad = simplexml_load_file("books.xml");

        $book = $xmlLoad->addChild("book");

        //$xmlLoad->addChild("name", $bookname);
        //$xmlLoad->addChild("publisher", $publisher);

        $book->addChild("name", $bookname);
        $book->addChild("publisher", $publisher);
        $book->addChild("isbn", $isbn);
        $book->addChild("price", $price);
        $book->addChild("image", "resources/book_default.png");
        $book->addChild("delete", "resources/drop.png");

        $xmlLoad->saveXML("books.xml");
    }
}
//echo "Books";
?>
