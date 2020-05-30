<?php

include('db.php');

if (isset($_POST['save_voiture'])) {
 $prix= $_POST['prix'];
  $immatriculation= $_POST['immatriculation'];
  $marque = $_POST['marque'];
  $modele= $_POST['modele'];
  $kilometrage= $_POST['kilometrage'];
  $etat= $_POST['etat'];
  $pic= $_POST['pic'];
  $query = "INSERT INTO voiture(immatriculation, prix, marque, modele, kilometrage, etat, pic) VALUES ('$immatriculation','$prix', '$marque', '$modele', '$kilometrage', '$etat', '$pic')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'voiture enregistré';
  $_SESSION['message_type'] = 'success';
  header('Location: voiture.php');

}

?>
