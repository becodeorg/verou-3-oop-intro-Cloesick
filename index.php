//

<?php

// Define the Book class.
class Book
{
    // Declare properties.
    var $title;
    var $author;
    var $publisher;
    var $yearOfPublication;
}

// Create a new book instance.
$book = new Book;

// Set properties.
$book->title                = 'Game of Thrones';
$book->author               = 'George R R Martin';
$book->publisher            = 'Voyager Books';
$book->yearOfPublication    = 1996;

// Echo properties.
echo $book->title               . PHP_EOL;
echo $book->author              . PHP_EOL;
echo $book->publisher           . PHP_EOL;
echo $book->yearOfPublication   . PHP_EOL;