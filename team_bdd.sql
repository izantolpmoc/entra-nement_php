CREATE DATABASE team;

USE team;

-- 2 - Création d'une table : "player" (id_player, nom, prenom, age, poste (ENUM : attaquant /defenseur ), presentation, message (DEFAULT NULL) )

CREATE TABLE player (
    id_player int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom varchar(25) NOT NULL,
    prenom varchar(25) NOT NULL,
    age int(3) NOT NULL,
    poste ENUM ('attaquant', 'defenseur') NOT NULL,
    presentation text NOT NULL,
    message text DEFAULT NULL,
    UNIQUE KEY id_player(id_player)
)ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO player( nom, prenom, age, poste, presentation) VALUES
('DUPONT', 'Jean-Michel', 34, 'defenseur', "Passionné de la balle depuis l'enfance, JM est un vrai professionnel" ),
('RONDOUILLET', 'François', 34, 'attaquant', "François a su montrer ses preuves lors de nombreux matchs. On l'appelle l'attaquant éclair." );