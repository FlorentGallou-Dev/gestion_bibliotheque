<?php

    require "model/entity/book.php";
    require "model/bookmodel.php";

    $bookModel = new bookModel;
    $book = $bookModel->getBook($_GET["book"]); // get the book list from database

    require "view/singleBookView.php";