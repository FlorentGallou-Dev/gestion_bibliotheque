DROP DATABASE IF EXISTS library;
CREATE DATABASE library CHARACTER SET 'utf8';
USE library;

CREATE TABLE borrower (
  bw_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  bw_firstname varchar(25) NOT NULL,
  bw_lastname varchar(25) NOT NULL,
  bw_birthdate date NOT NULL,
  bw_address varchar(255) NOT NULL,
  bw_phone varchar(14) NOT NULL,
  PRIMARY KEY (bw_id)
) ENGINE=InnoDB;

CREATE TABLE book (
  bk_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  bk_title varchar(255) NOT NULL,
  bk_writer varchar(25) NOT NULL,
  bk_summary TEXT(2000) NOT NULL,
  bk_editor varchar(25) NOT NULL,
  bk_edition_date date NOT NULL,
  bk_category varchar(25) NOT NULL,
  bk_borrowed tinyint(1) DEFAULT 0,
  bk_borrowed_date date NULL,
  bw_id int(10) UNSIGNED NULL,
  PRIMARY KEY (bk_id),
  CONSTRAINT fk_bw_book FOREIGN KEY book(bw_id) REFERENCES borrower(bw_id)
) ENGINE=InnoDB;

INSERT INTO `borrower`
VALUES
(NULL, "Robert", "Brulax", '1975-06-12', "25, rue de la haute ville 76960 Brandeville-les-Blopeux", "02-13-25-32-68"),
(NULL, "Justine", "Trifulto", '1996-11-16', "2, route du paradis 42161 Walnutt Grove", "08-12-14-42-69"),
(NULL, "Constance", "Sir", '1942-12-01', "14, avenue du breton cliquant 23958 Bertigneux-Ivrefontaine", "04-84-52-36-52");

INSERT INTO book
VALUES 
(NULL, "L'auto-entrepreneur pour les nuls", "Grégoire Leclercq", "Être autoentrepreneur ? Cela paraît simple comme bonjour. Mais mieux vaut commencer le voyage en s'y étant bien préparé.", "First Editions" , '2014-03-16','Entreprise', NULL, NULL, NULL),
(NULL, "Danse avec les loups", "Michael Blake", "Fort Sedgewick. Un avant-poste au fin fond de l'Ouest sauvage. Trois ou quatre baraques délabrées, une poignée d'hommes épuisés. C'est la qu'est affecté le lieutenant Dunbar. Il rêvait de grands espaces, de batailles glorieuses. À son arrivée, une surpise l'attend : le fort est abandonné, il se retrouve seul.", "Anne Carrière" , '1988-11-06','Roman', NULL, NULL, NULL),
(NULL, "Le seigneur des anneaux - La communauté de l'anneau", "J.R.R. Tolkien", "Dans les vertes prairies de la Comté, les Hobbits, ou semi-hommes, vivaient en paix... jusqu'au jour fatal où l'un d'entre eux, au cours de ses voyages, entra en possession de l'Anneau unique au immenses pouvoirs. Pour le reconquérir, Sauron, le seigneur ténébreux, va déchaîner toutes les forces du Mal... frodon, le Porteur de l'Anneau, Gandalf, le magicien, et leurs intrépides compagnons réussiront-ils à écarter la menace qui pèse sur la Terre du Millieu ?", "Folio junior" , '1966-08-14','Roman', NULL, NULL, NULL),
(NULL, "La cinquième Montagne", "Pauo Coelho", "Au IXeme siècle avant notre ère, Dieu ordonne au prophète Élie de quitter Israël. Son chemin le mène alors à Sarepta, une petite cité phénicienne. Là, dans la ville assiégée par les Assyriens, Élie perdra tout, notamment la femme aimée, et sera pris dans un tourbillon d'événements dramatiques qui le conduiront à affronter Dieu.", "J'ai Lu" , '1998-12-25','Roman', NULL, NULL, NULL),
(NULL, "Le véritable et authentique Manuel des Castors juniors", "Walt Disney Productions", "'réponse à tout... ou presque !' Grâce à ce manuel, riri, Fifi et Loulou se sortent toujours avec brio des situations les plus improbables. Apprendre à lire une carte, être incollable sur les animaux, allumer un feu, deviner l'heure sans montre, décoder le morse, reconnaître les constellations... Cet ouvrage est une mine d'or pour comprendre ce qui nous entoure, se débrouiller dans la nature et résoudre les énigmes du quotidien, grâce à de nombreuses astuces futées !", "Hachette" , '1970-02-21','Jeunesse', NULL, NULL, NULL);