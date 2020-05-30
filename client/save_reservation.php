<?php
include('dbconfig.php');


if (isset($_POST['save_reservation'])) {
 include 'config.php';

  $client = $_SESSION['id']; 
  //$_POST['client'];
  $voiture = $_POST['voiture'];
  // $_POST['voiture'];
  $depart = $_POST['depart'];
  $retour = $_POST['retour'];
  $livraison = $_POST['livraison'];
  $etat = 'en cours';
  $chauffeur=$_POST['chauffeur'];
  //$_POST['etat'];
  $prix = $_POST['prix'];
  $nochauf = 0;
  if ($chauffeur=='Avec chauffeur'){
    $query2 = "SELECT * from chauffeur where disponibilite='dispo' ORDER BY nom ASC limit 1";
  $result = mysqli_query($conn, $query2);
  if (mysqli_num_rows($result) == 1){
  	$row = mysqli_fetch_array($result);
    $idc = $row['id'];
    $nochauf = 1;
  }
  }
  
 
  if ($chauffeur=='Avec chauffeur'){
    if ($nochauf == 1)
     {
      $query = "INSERT INTO reservation(client, voiture,depart,retour, livraison,chauffeur, etat, prix) VALUES ( '$client','$voiture','$depart','$retour','$livraison','$chauffeur','$etat', '$prix')";
       $result = mysqli_query($conn, $query);
             if($result) {
             		 $query = "UPDATE chauffeur set disponibilite= 'nn dispo' WHERE id=$idc";
  					mysqli_query($conn, $query);
                     echo "<script type = \"text/javascript\">
                     alert(\"Réservation effectué avec succés\");
                      window.location = (\"accueil.php\")
                       </script>";
            } else{
                    echo "<script type = \"text/javascript\">
                     alert(\"Erreur\");
                     window.location = (\"panier.php\")
                      </script>";
                    }
             $_SESSION['message'] = 'Réservation ajouter avec succés';
              $_SESSION['message_type'] = 'success';
      }
     else
      {
            echo "<script type = \"text/javascript\">
          alert(\"Aucun chauffeur n'est disponible\");
            window.location = (\"reservation.php\")
            </script>";

       }
     }
  else{
       $query = "INSERT INTO reservation(client, voiture,depart,retour, livraison,chauffeur, etat, prix) VALUES ( '$client','$voiture','$depart','$retour','$livraison','$chauffeur','$etat', '$prix')";
     $result = mysqli_query($conn, $query);
      if($result) {
    echo "<script type = \"text/javascript\">
    alert(\"Réservation effectué avec succés\");
    window.location = (\"accueil.php\")
    </script>";
    } else{
    echo "<script type = \"text/javascript\">
    alert(\"Erreur\");
    window.location = (\"panier.php\")
    </script>";
    }
  $_SESSION['message'] = 'Réservation ajouter avec succés';
  $_SESSION['message_type'] = 'success';
  }
}
?>

