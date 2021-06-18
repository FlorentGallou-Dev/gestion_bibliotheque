<?php
// Controleur qui gère l'affichage de tous les utilisateurs

    require "model/entity/borrower.php";
    require "model/borrowerModel.php";

    $borrowerModel = new borrowerModel;
    $borrowers = $borrowerModel->getBorrowers(); // get the book list from database

    require "view/borrowersView.php";