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
   $prixfixe= $_POST['prixfixe'];

  $query = "INSERT INTO voiture(immatriculation, prix, marque, modele, kilometrage, etat, pic,prixfixe ) VALUES ('$immatriculation','$prix', '$marque', '$modele', '$kilometrage', '$etat', '$pic','$prixfixe')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'voiture enregistré';
  $_SESSION['message_type'] = 'success';
  header('Location: voiture.php');

}

?>
