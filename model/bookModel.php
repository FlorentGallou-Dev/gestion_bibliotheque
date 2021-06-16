<?php

  require "dataBase.php";


class bookModel {

  private PDO $bdd;

  // Récupère tous les livres
  public function getBooks()
  {
    $query = $this->bdd->prepare(
      "SELECT bk_id, bk_title, bk_writer, bk_summary, bk_editor, bk_edition_date, bk_category, bk_borrowed, bk_borrowed_date
      FROM book"
    );
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
  }


  // Récupère un livre
  public function getBook() {

  }

  // Ajoute un nouveau livre
  public function addBook() {

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

  function __construct()
  {
      $this->bdd = DataBase::getBdd();
  }

}
