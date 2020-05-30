<?php

include('db.php');

if (isset($_POST['sauvgarder_client'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $cin = $_POST['cin'];
  $adresse = $_POST['adresse'];
  $numdetel = $_POST['numdetel'];
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];
  $role= 'client';
  $query = "INSERT INTO user(nom,prenom,cin,adresse,numdetel,email,mdp,rolee) VALUES ('$nom', '$prenom', '$cin', '$adresse', '$numdetel', '$email', '$mdp','client')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Client enregistrée avec succès';
  $_SESSION['message_type'] = 'success';
  header('Location: client.php');

}

?>
