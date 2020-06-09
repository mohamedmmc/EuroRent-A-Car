<?php

include('db.php');

if (isset($_POST['save_agent'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $cin = $_POST['cin'];
  $adresse = $_POST['adresse'];
  $numdetel = $_POST['numdetel'];
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];
  $role= 'agent';
  $query = "INSERT INTO user(nom,prenom,cin,adresse,numdetel,email,mdp,rolee) VALUES ('$nom', '$prenom', '$cin', '$adresse', '$numdetel', '$email', '$mdp','agent')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Agent enregistrée avec succès';
  $_SESSION['message_type'] = 'success';
  header('Location: gestionagent.php');

}


?>
