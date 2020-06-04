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
$em = $_POST['email'];

// insertion de la news dans sa table:
$q = "INSERT INTO newsletters (email,date) VALUES('$em',NOW())";
$conn->query($q);
            echo "<script type = \"text/javascript\">
          alert(\"Ajouté à la Newsletter avec succés\");
            window.location = (\"accueil.php\")
            </script>";
?>

