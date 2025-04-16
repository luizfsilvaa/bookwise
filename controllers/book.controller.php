<?php 
require("data.php");

$id = $_REQUEST["id"];
$result = array_filter($books, function($b) use ($id) {
    return $b["id"] == $id;
});

$book = array_pop($result);

view("book", [
    "book" => $book
]);

?>
