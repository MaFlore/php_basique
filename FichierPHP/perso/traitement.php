<?php
if(isset($_POST['Envoyer'])){
	    $erreurs="";
		extract($_POST);
		//nettoyer le nom et le prenom
		$nom=filter_var($nom,FILTER_SANITIZE_SPECIAL_CHARS);
		$prenom=filter_var($prenom,FILTER_SANITIZE_SPECIAL_CHARS);
		//Validation de l'email
			if(filter_var($email, FILTER_VALIDATE_EMAIL)===false ){
				$erreurs.="email incorrect<br>";
			}
			
			//Les autres champs sont obligatoire
			//$domaine et $lang sont des tableaux
			if(!isset($domaine) ){
				$erreurs.="vous devez choisir un domaine<br>";
			}
			if(!isset($lang)){
				$erreurs.="vous devez choisir au moins un  langage<br>";
			}
			if(!isset($pays) || empty($pays)){
				$erreurs.="vous devez choisir votre pays<br>";
			}
			if(!isset($sexe)) $erreurs.="vous devez choisir votre sexe<br>";
        //afficher les erreurs
		if($erreurs!=""){
			die($erreurs);
		}
		else{
             //afficher le resultat
             $resultat="<table border>";
             $resultat.="<tr><td>Attributs</td><td>Valeurs</td></tr>";
             $resultat.="<tr><td>Nom</td><td>$nom</td></tr>";
             $resultat.="<tr><td>Prenom</td><td>$prenom</td></tr>";
             $resultat.="<tr><td>Email</td><td>$email</td></tr>";
             $resultat.="<tr><td>Sexe</td><td>$sexe</td></tr>";
             //implode rassemble les éléments d'un tableau en une chaine de valeurs séparées (ici par des virgule)
             $resultat.="<tr><td>Domaine</td><td>".implode(",", $domaine)."</td></tr>";
             $resultat.="<tr><td>Pays</td><td>".$pays."</td></tr>";
             $resultat.="<tr><td>langage</td><td>".implode(",", $lang)."</td></tr>";

         echo $resultat;

		}

}
