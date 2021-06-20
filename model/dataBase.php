<?php
// Classe pour se connecter à la base de données
// Son usage n'est pas obligatoire, vous pouvez faire sans

    class DataBase {
        const HOST = 'localhost';
        const NAME = 'library';
        const LOGIN = 'root';
        const PASSWORD = '';

        static public function getBdd():PDO {
            try {
                return new PDO('mysql:host='.self::HOST.';dbname='.self::NAME , self::LOGIN , self::PASSWORD);
            } catch (Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
    }