<?php

  // Vous pouvez appeler ce fichier newsletters.php
  // OU
  // lui donner le nom que vous voulez

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
    if(isset($_POST["envois_mail"]))
    {


  $titre = 'Newletters EuroRent A Car';
  $template_file = "test.html";

  $q = $conn->query("SELECT email FROM newsletters"); // requete
  $compteur=1; // variable pour compter les mails
  while ($r = mysqli_fetch_array($q)) {
  $e_mail = $r['email']; //prend l'email de la table

  // 1 exemple de contenu du mail
  /*$contenu = 'Bonjour! <br />Email : '.$e_mail.'<br />';
  $contenu .= 'Voici la dernière newletters::';
  $contenu .= 'Au revoir <br /><br />';

  // envoi du mail HTML
  $from = "From: hello <newsletter@monsite.ext>\nMime-Version:";
  $from .= " 1.0\nContent-Type: text/html; charset=ISO-8859-1\n";
  // envoie du mail*/

  //$from = "From: EuroRentAcar2A9@gmail.com";
  if (file_exists($template_file))
    $contenu = file_get_contents($template_file);
  else
    die("fichier php non trouvé");

     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'From: EuroRent A Car <EuroRentAcar2A9@gmail.com>';


  mail($e_mail,$titre,$contenu,implode("\r\n", $headers));
        }
        echo "<script type = \"text/javascript\">
                    alert(\"Newletters envoyé avec succés\");
                    window.location = (\"crudchauffeur.php\")
                    </script>";
    }
                    

?>

