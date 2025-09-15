<?php

	try{
		$user = "root";
		$pass = "root";
		$bdd = new PDO ('mysql:host=localhost;dbname=vtc',$user,$pass);

		// Configuration des erreurs PDO
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch (PDOException $e){
		print "Erreur! :" . $e->getMessage() .
		"<br/>";
		die();
	}

?>