<?php
use App\Models\BooksModel;
use App\Controllers\IndexController;
use App\Helpers\DisplayBooks;
$displayBooks = new DisplayBooks;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Joshua Bennet's PHP Book Collection App" />
    <title>Book Collection</title>
</head>
<body>
<h1>Josh's Library</h1>
<div>The Bookshelf</div>
    <div>
        <section class="bookshelf">
            <?php

            // this needs to be looked into, I am sure this needs to be introduced differently 
            echo $displayBooks->createAllBooks($books);
            ?>
        </section>
    </div>
</body>
</html>
