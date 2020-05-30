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
  $rolee= 'client';
  $query = "INSERT INTO user(nom,prenom,cin,adresse,numdetel,email,mdp,rolee) VALUES ('$nom', '$prenom', '$cin', '$adresse', '$numdetel', '$email', '$mdp','client')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  header('Location: accueil.html#oModal');

}



?>
