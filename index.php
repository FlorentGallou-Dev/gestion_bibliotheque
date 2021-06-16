<?php

    require "model/entity/book.php";
    require "model/bookmodel.php";

    $bookModel = new bookModel;
    $books = $bookModel->getBooks(); // get the book list from database

    require "view/indexView.php";