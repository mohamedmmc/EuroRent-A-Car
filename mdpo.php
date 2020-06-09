<?php


    $servername  = "localhost";
    $username  = "root";
    $password  = "";
    $DBname    = "crud";

    // Créer une connexion
    $conn = mysqli_connect($servername, $username, $password, $DBname);

    // Vérifier la connexion
    if (!$conn) {
        die("La connexion a échoué: " . mysqli_connect_error());
    }

  // envoie du mail

  // titre du mail
    if(isset($_POST["forgotpass"]))
    {


  $titre = 'Mot de passe oublié';

  $emaila=$_POST["email1"];
  $q =$conn->query("SELECT mdp FROM user where email='$emaila'"); // requete
  while ($r = mysqli_fetch_array($q)) {
  $e_mail = $r['mdp'];
  }


     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'From: EuroRent A Car <EuroRentAcar2A9@gmail.com>';
     $contenu = '<img src="https://i.ibb.co/KL9NXt4/logo.png" /><h4>Bonjour! </h4>Email : '.$emaila.'<br />';
     $contenu .= 'Voici votre mot de passe::'.$e_mail.'<br />';
     $contenu .= 'Au revoir <br /><br />';

  if(mail($emaila,$titre,$contenu,implode("\r\n", $headers)))
  {
        echo "<script type = \"text/javascript\">
                    alert(\"Mot de passe envoyé avec succés\");
                    window.location = (\"accueil.php\")
                    </script>";
                  }
   else
   {
        echo "<script type = \"text/javascript\">
                    alert(\"ce mail n'existe pas \");
                    window.location = (\"accueil.php\")
                    </script>";
   }
    }
                    

?>

