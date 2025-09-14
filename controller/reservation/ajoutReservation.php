<?php 

include('../../bdd/bdd.php');


if(isset($_POST['lieu'])) {
	
	$lieu = $_POST['lieu'];
	$vehiculeId = $_POST['vehicule_id'];

	$req = $bdd->prepare("INSERT INTO reservation (lieu, vehicule_id) VALUES (:lieu , :vehicule_id)");

	$req->bindParam(':lieu', $titre);
	$req->bindParam(':vehicule_id', $vehiculeId);

	$req->execute();

	//changer le hader location selon votre redirection
	header('Location:http://localhost/todo_app/todo_app/');
}



?>