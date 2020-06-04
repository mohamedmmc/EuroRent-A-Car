<?php
include("db.php");
$motif = '';
$nom = '';
$prenom = '';
$CIN = '';
$numtel = '';
$email = '';
$mdp = '';
$rolee = 'client';
$mdperreur1='';
  $id = $_SESSION['id'];
  $query = "SELECT * FROM user WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $cin = $row['cin'];
    $adresse = $row['adresse'];
    $numdetel = $row['numdetel'];
    $email = $row['email'];
    $mdp3 = $row['mdp'];
}
if (isset($_POST['update'])) {
  $nom= $_POST['nom'];
  $prenom = $_POST['prenom'];
  $cin= $_POST['cin'];
  $adresse = $_POST['adresse'];
  $numdetel= $_POST['numdetel'];
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];
  if($mdp == $mdp3 )
  {
  $query = "UPDATE user set nom = '$nom', prenom = '$prenom', cin = '$cin',adresse = '$adresse',numdetel = '$numdetel',email = '$email' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Client modifiée avec succès';
  $_SESSION['message_type'] = 'warning';
  $_SESSION['nom']=$nom;
  echo "<script type = \"text/javascript\">
    alert(\"Vos données ont été modifié \");
    window.location = (\"accueil.php\")
    </script>";
  }
	else
	{
		echo "<script type = \"text/javascript\">
    alert(\"Votre ancien mot de passe est incorect \");
    window.location = (\"pagemodifier_user.php\")
    </script>";
	}
}
if (isset($_POST['mvmdp'])) {
  $mdp = $_POST['mdp4'];
  $mdp1 = $_POST['mdp1'];
  $mdp2 = $_POST['mdp2'];
  if($mdp == $mdp3 )
  {
    if($mdp1==$mdp2){
  $query = "UPDATE user set mdp = '$mdp1' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Client modifiée avec succès';
  $_SESSION['message_type'] = 'warning';
  echo "<script type = \"text/javascript\">
    alert(\"Vos données ont été modifié \");
    window.location = (\"accueil.php\")
    </script>";
      
  }else
  {
echo "<script type = \"text/javascript\">
    alert(\"Le mot de passe doit être identique\");
    window.location = (\"pagemodifier_user.php\")
    </script>"; }
  }
  else
  {
    echo "<script type = \"text/javascript\">
    alert(\"Votre ancien mot de passe est incorect \");
    window.location = (\"pagemodifier_user.php\")
    </script>";
  }
}


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EuroRent A Car | Contact</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">

</head>

<body>
	<div id="oModal" class="oModal">
     <section>
<body>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
              <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>

            <!-- Nested Row within Card Body -->
            <div class="p-5">
                  <div class="text-center">

                    <h1 class="h4 text-gray-900 mb-4">Modifier votre mot de passe</h1>
                  </div>
                  <form class="user" id="form1" name="mvmdp" method="POST" action="pagemodifier_user.php">
                     <div class="form-group">
                     <input type="password" name="mdp4"  class="form-control form-control-user" placeholder="Votre mot de passe actuel" minlength="6" required oninvalid="setCustomValidity('le mot de passe doit contenir au moins 6 caractères')" oninput="setCustomValidity('')"  autofocus>
                  </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="mdp1"  class="form-control form-control-user" placeholder="Nouveau mot de passe"  required oninvalid="setCustomValidity('le mot de passe doit contenir au moins 6 caractères')" oninput="setCustomValidity('')"  autofocus>
                  </div>
                  <div class="col-sm-6">
                     <input type="password" name="mdp2"  class="form-control form-control-user" placeholder="Répeter le Nouveau mot de passe" required oninvalid="setCustomValidity('le mot de passe doit contenir au moins 6 caractères')" oninput="setCustomValidity('<?php echo $mdperreur1;?>')"  autofocus>
                  </div>
                </div>
                    <input type="submit" name="mvmdp" id="button"  value="Valider" class="btn btn-primary btn-user btn-block"/>
                    
                 
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</body>
     </section>
  </div>
</div>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Header Section Begin -->
       <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./accueil.php"><img src="../img/logo.png" alt=""></a>
                </div>
                                <div class="header-right">
                   
                     <nav class="main-menu mobile-menu">
                    <ul>
                       <a href="gestion_panier.php">
                        <img src="../img/icons/bag.png" alt="">
                    </a>
                    <li><a> <img src="../img/icons/option.png" alt=""></a>
                            <ul class="sub-menu">
                                <li><a href="gestion_commande.php">Vos commandes</a></li>
                                <li><a href="pagemodifier_user.php">Profil</a></li>
                                <li><a href="../accueil.php">Se déconnecter</a></li>
                            </ul>
                        </li>
                     </ul> 
                     </nav>  
                </div>
                <div class="user-access">
                   <a> Bienvenue <u> <?php echo $_SESSION['nom']; ?></u> </a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="./accueil.php">Accueil</a></li>
                        <li><a href="./reservation.php">Réservation</a>
                        <li><a href="./services.php">Services</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="../img/icons/delivery.png" alt="">
                        <p>Livraison gratuite jusqu'à l'aéroport</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="../img/icons/voucher.png" alt="">
                        <p>Assistance disponible 24/7</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="../img/icons/sales.png" alt="">
                    <p>10% off en utilisant le code EuroPromo</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Votre profil<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Contact Section Begin -->
                            <!-- lena lkhedma -->
                            <section class="categories-page spad">
                            <div class="container">
              <form class="user" action="pagemodifier_user.php" method="POST">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nom" minlength="1" required oninvalid="setCustomValidity('Le nom doit etre non vide')" oninput="setCustomValidity('')" class="form-control form-control-user" value="<?php echo $nom; ?>" placeholder="Nom" autofocus>
                  </div>
                  <div class="col-sm-6">
                     <input type="text" name="prenom" minlength="1" required oninvalid="setCustomValidity('Le Prenom doit etre non vide')" oninput="setCustomValidity('')" class="form-control form-control-user" value="<?php echo $prenom; ?>" placeholder="Prenom" autofocus>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="cin" class="form-control form-control-user" value="<?php echo $cin; ?>" placeholder="cin"   maxlength="8" pattern="[0-9]{8,}"  required oninvalid="setCustomValidity('le cin doit contenir 8 chiffres')" oninput="setCustomValidity('')" autofocus>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="numdetel" class="form-control form-control-user" value="<?php echo $numdetel; ?>" maxlength="8" pattern="[0-9]{8,}"  required oninvalid="setCustomValidity('le numero de telephone doit contenir  8 chiffres')" oninput="setCustomValidity('')" placeholder="numero de téléphone" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" required oninvalid="setCustomValidity('tapez une adresse e-mail valide')" oninput="setCustomValidity('')" name="email" class="form-control form-control-user" value="<?php echo $email; ?>" placeholder="Adresse email" >
                </div>
                <div class="form-group">
                 <input type="text" name="adresse" minlength="1" required oninvalid="setCustomValidity('adresse doit etre non vide')" oninput="setCustomValidity('')" class="form-control form-control-user" value="<?php echo $adresse; ?>" placeholder="Adresse" autofocus>
                </div>
                <div class="form-group">
                     <input type="password" name="mdp"  class="form-control form-control-user" placeholder="Votre mot de passe actuel" minlength="6" required oninvalid="setCustomValidity('le mot de passe doit contenir au moins 6 caractères')" oninput="setCustomValidity('')"  autofocus>
                  </div>
                	 <div class="row2">
                	<div class="col-lg-4">
                		<a href="#oModal">
                	<input type="button"  class="btn btn-primary btn-user btn-block" value="Modifier votre mot de passe">
                	</a>
                	</div>
                	<div class="col-lg-4">
                     <input type="submit" name="update" class="btn btn-primary btn-user btn-block" value="Modifier ton profil">
                	</div>
                </div>
              </form>
          </div>
      </section>
                            <!-- touga lkhedma -->
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
   <footer class="footer-section spad">
        <div class="container">
            <div class="newslatter-form">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Votre adresse email">
                            <button type="submit">Abonnez-vous à notre newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>À propos</h4>
                            <ul>
                                <li>Nous sommes</li>
                                <li>Contactez nous</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Nos Services</h4>
                            <ul>
                                <li>Livraison gratuite</li>
                                <li>Retour gratuit</li>
                                <li>Termes et conditions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Informations</h4>
                            <ul>
                                <li>Methodes de paiement</li>
                                <li>Conformité des produits</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
      <div class="container">
        <div class="social-links">
          <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
          <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
          <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
          <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
          <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
          <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
        </div>
      </div>
            </div>
    </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>