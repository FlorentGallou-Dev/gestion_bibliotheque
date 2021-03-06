<?php

  require "dataBase.php"; 

class BorrowerModel {

  private PDO $bdd;

  // Récupère tous les utilisateurs
  public function getBorrowers() {
    $query = $this->bdd->prepare(
      "SELECT bw_id, bw_firstname, bw_lastname, bw_birthdate, bw_address, bw_phone
      FROM borrower"
    );
    $query->execute();
    $query->setFetchMode(PDO::FETCH_CLASS, 'Borrower');
    $result = $query->fetchAll();
    return $result;
  }

  // Récupère un utilisateur par son id
  public function getBorrowerById() {

  }

  // Récupère un utilisateur par son code personnel
  public function getBorrower() {

  }

  function __construct()
  {
      $this->bdd = DataBase::getBdd();
  }

}
