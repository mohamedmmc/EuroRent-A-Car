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
if ($chauffeur=='Avec chauffeur')
{
        //$query2 = "SELECT * from chauffeur where disponibilite='dispo' ORDER BY nom ASC limit 1";

    /*$query2 = "SELECT * from chauffeur where (((Datediff(disponibilite,'$retour')<0) and (Datediff(disponiblite,'$depart')<0)) OR ((Datediff(retour,'$retour')>0) and (Datediff(retour,'$depart')>0))) ORDER BY nom ASC limit 1";*/
    $query2 = "SELECT * from chauffeur where ( (disponibilite > '$depart' and disponibilite > '$retour') or (retour < '$depart' and retour < '$retour') ) ORDER BY nom ASC limit 1";
	$result = mysqli_query($conn, $query2);
	if (mysqli_num_rows($result) == 1)
	{
	  	$row = mysqli_fetch_array($result);
	    $idc = $row['id'];
	    $depart2=$row['disponibilite'];
	    $retour2=$row['retour'];
	    $nochauf = 1;
	}
    if ($nochauf == 1)
    {
        $query = "INSERT INTO reservation(client, voiture,depart,retour, livraison,chauffeur, etat, prix, idc) VALUES ( '$client','$voiture','$depart','$retour','$livraison','$chauffeur','$etat', '$prix', '$idc')";
        $result = mysqli_query($conn, $query);
        if($result) 
        {
        	$departbd = strtotime($depart2); 
        	$departt = strtotime($depart);
        	$retourbd = strtotime($retour2); 
        	$retourr = strtotime($retour);
            if ($departbd > $departt)
            {
                $query = "UPDATE chauffeur set disponibilite= '$depart' WHERE id=$idc";
                  mysqli_query($conn, $query);
            }
            else if ($retourbd < $retourr)
            {
                $query = "UPDATE chauffeur set retour = '$retour' WHERE id=$idc";
                mysqli_query($conn, $query);
            }
             	echo "<script type = \"text/javascript\">
                     alert(\"Réservation effectué avec succés\");
                      window.location = (\"accueil.php\")
                       </script>";
        } 
        else
        {
            echo "<script type = \"text/javascript\">
                     alert(\"Erreur\");
                     window.location = (\"panier.php\")
                      </script>";
        }
            $_SESSION['message'] = 'Réservation ajouté avec succés';
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
else
{
    $query = "INSERT INTO reservation(client, voiture,depart,retour, livraison,chauffeur, etat, prix) VALUES ( '$client','$voiture','$depart','$retour','$livraison','$chauffeur','$etat', '$prix')";
    $result = mysqli_query($conn, $query);
    if($result) 
    {
	    echo "<script type = \"text/javascript\">
	    alert(\"Réservation effectué avec succés\");
	    window.location = (\"accueil.php\")
	    </script>";
    } 
    else
    {
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

