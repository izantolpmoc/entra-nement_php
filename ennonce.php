<?php
/*
1 - Création base de données : "team"


2 - Création d'une table : "player" (id_player, nom, prenom, age, poste (ENUM : attaquant /defenseur ), presentation, message (DEFAULT NULL) )


----------------------------------------------------

3 - création d'une page : "accueil" 
	-> menu avec 2 liens :	Un pour aller sur la page "ajout"
							L'autre pour aller sur la page 'voir tous les joueurs'

	-> affichez les infos de 5 joueurs sur la page d'accueil

4 - création d'une page : "ajout joueur"

	-> création formulaire pour insertion
	Enregistrement des données (formulaire)
		=> pensez aux controles des saisies :
			-> nom, prenom OBLIGATOIRE  (2 conditions)
			-> l'age doit etre un ENTIER et avoir 2 chiffres

5 - création d'une page : "voir toute les joueurs"

	-> affichage des joueurs dans 'l'ordre croissant'
	-> CHAQUE annonce doit pouvoir etre cliqué pour aller voir la "fiche du joueur"

	6 - création d'une page : "profil_joueur"

		-> affichez les details du joueurs

	=> SUR la fichePlayer faites en sorte d'ajouter un formulaire avec un input permettant de laisser un message pour acheter le joueur

	-> insertion du message => donc modification (update) de la table

	-> SI il y a un message pour un joueur, il faut l'indiquer :

		Sur la page "Tous les joueurs" indiqué que le joueur n'est pas libre

		Sur la page "profil_joueur" : affichez un message "déjà acheté" et NE PLUS afficher le formulaire
*/