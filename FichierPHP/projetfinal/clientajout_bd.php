<?php
include ('crudClient.class.php');
$a = new crudClient();
if (isset($_POST['Enregistrer'])) {
    
    $nomClient = $_POST['nomClient'];
    $prenomClient = $_POST['prenomClient'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $telephone = $_POST['telephone'];
    $numPermis = $_POST['numPermis'];
    $numCNI = $_POST['numCNI'];
    $mail = $_POST['mail'];


$a->insert('client',['nomClient'=>$nomClient,'prenomClient'=>$prenomClient,'adresse'=>$adresse,'ville'=>$ville, 'telephone'=>$telephone, 'numPermis'=>$numPermis, 'numCNI'=>$numCNI,'mail'=>$mail]);
if ($a == true) {
    header('Location: /FICHIERPHP/projetfinal/liste_client.php');
}
}


?>