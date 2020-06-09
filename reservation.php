<!DOCTYPE html>
<html lang="zxx">
<?php include'dbconfig.php' ?>
<style>
/* CSS */

</style>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EuroRent A Car</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
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
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">

                    <h1 class="h4 text-gray-900 mb-4">Bienvenue!</h1>
                  </div>
                  <form class="user" id="form1" name="form1" method="POST" action="connexion.php">
                    <div class="form-group">
                      <input  type="email" id="login" name="login" id="login" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Votre adresse mail">
                    </div>
                    <div class="form-group">
                      <input type="password" id="pwd" name="pwd" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Se souvenir</label>
                        <div class="form-group">
                            <a class="small" href="#oModal2">Pas de compte? Creer un compte!</a>
                          </div>
                          <div class="form-group">
                            <a class="small" href="#oModal3">Mot de passe oublié!</a>
                          </div>
                      </div>
                    </div>
                    <input type="submit" name="button" id="button"  value="Valider" class="btn btn-primary btn-user btn-block"/>
                    
                 
                  </form>
                  </div>
                </div>
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
<div id="oModal2" class="oModal2">
     <section>


  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Créer un nouveau compte!</h1>
              </div>
              <form class="user" action="sauvgarder_client.php" method="POST">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="nom" minlength="1" required oninvalid="setCustomValidity('Le nom doit etre non vide')" oninput="setCustomValidity('')" class="form-control form-control-user" placeholder="Nom" autofocus>
                  </div>
                  <div class="col-sm-6">
                     <input type="text" name="prenom" minlength="1" required oninvalid="setCustomValidity('Le Prenom doit etre non vide')" oninput="setCustomValidity('')" class="form-control form-control-user" placeholder="Prenom" autofocus>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="cin" class="form-control form-control-user" placeholder="cin"   maxlength="8" pattern="[0-9]{8,}"  required oninvalid="setCustomValidity('le cin doit contenir 8 chiffres')" oninput="setCustomValidity('')" autofocus>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="numdetel" class="form-control form-control-user" maxlength="8" pattern="[0-9]{8,}"  required oninvalid="setCustomValidity('le numero de telephone doit contenir  8 chiffres')" oninput="setCustomValidity('')" placeholder="numero de téléphone" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" required oninvalid="setCustomValidity('tapez une adresse e-mail valide')" oninput="setCustomValidity('')" name="email" class="form-control form-control-user" placeholder="Adresse email" >
                </div>
                <div class="form-group">
                 <input type="text" name="adresse" minlength="1" required oninvalid="setCustomValidity('adresse doit etre non vide')" oninput="setCustomValidity('')" class="form-control form-control-user" placeholder="Adresse" autofocus>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="mdp"  class="form-control form-control-user" placeholder="Mot de passe" minlength="6" required oninvalid="setCustomValidity('le mot de passe doit contenir au moins 6 caractères')" oninput="setCustomValidity('')"  autofocus>
                  </div>
                  <div class="col-sm-6">
                     <input type="password" name="mdp"  class="form-control form-control-user" placeholder="Répeter Mot de passe" minlength="6" required oninvalid="setCustomValidity('le mot de passe doit contenir au moins 6 caractères')" oninput="setCustomValidity('')"  autofocus>
                  </div>
                </div>
                <input type="submit" name="sauvgarder_client" class="btn btn-success btn-block" value="Sauvegarder">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
     </section>
  </div>
</div>
<!-- mot de passe oublié début -->
  <div id="oModal3" class="oModal2">
     <section>


  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <a href="#fermer" title="Fermer la fenêtre" class="droite">X</a>
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Mot de passe oublié!</h1>
              </div>
              <form class="user" action="mdpo.php" method="POST">               
                <div class="form-group">
                  <input type="email" required oninvalid="setCustomValidity('tapez une adresse e-mail valide')" oninput="setCustomValidity('')" name="email1" class="form-control form-control-user" placeholder="Adresse email" >
                </div>
                <input type="submit" name="forgotpass" class="btn btn-primary btn-user btn-block" value="Envoyer le mot de passe">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
     </section>
  </div>
  <!-- mot de passe oublié fin -->
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
                    <a href="./accueil.php"><img src="img/logo.png" alt=""></a>
                </div>
                
                <div class="user-access">
                    <a href="#oModal2">Creer un compte</a>
                    <a href="#oModal" class="in">Se connecter</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="./accueil.php">Accueil</a></li>
                        <li><a href="./reservation.php">Réservation</a>
                        <li><a href="./services.html">Services</a></li>
                        <li><a href="./contact.html">Contact</a></li>
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
                        <img src="img/icons/delivery.png" alt="">
                        <p>Livraison gratuite jusqu'à l'aéroport</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/voucher.png" alt="">
                        <p>Assistance disponible 24/7</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>10% off en utilisant le code EuroPromo</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Gallerie<span>.</span></h2>
                        <a href="accueil.php">Accueil</a>
                        <!--<a href="#">Voitures</a>-->
                        <a class="active" href="#">Voitures</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/pancarte/add.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    
        <section class="categories-page spad">
        <div class="container">
            <div class="row">
            <?php
                        
                        $sel = "SELECT * FROM voiture where etat= 'disponible' ";
                        $rs = $conn->query($sel);
                        while($rws = $rs->fetch_assoc()){
            ?>
               <div class="col-lg-6 col-md-6">
                    <div class="single-product-item">
                     <a href="#oModal">    
                    <p href="panier.php?id=<?php echo $rws['id'] ?>">
                        <img class="thumb" src="img/products/<?php echo $rws['pic'];?>" >
                    </p></a>
                              
                     <div class="product-text">
                           <a href="#oModal">  <h3 href="panier.php?id=<?php echo $rws['id'] ?>"><?php echo $rws['marque'];?></h3></a>
                                 <h5><span ><?php echo $rws['modele'];?></span></h5>
                            </a>
                            <p><?php echo 'Prix : '.$rws['prix'];?></p>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </section>  <!--  end listing section  -->



                
    <!-- Categories Page Section End -->

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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
