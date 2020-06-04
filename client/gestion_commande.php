<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EuroRent A Car | Panier</title>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="js/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="js/jquery.datetimepicker.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>


<body>
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
    <!-- Header Info End -->
    <!-- Header End -->
 

    <!-- Page Add Section Begin -->
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2><span></span>Vos commandes</h2>
                      
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/pancarte/adpromo.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    
       
      

<!-- ADD TASK FORM -->

<div class="container" center>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Voiture</th>
      <th>Date départ</th>
      <th>Date retour</th>
      <th>Livraison</th>
      <th>Chauffeur</th>
      <th>Etat</th>
      <th>Prix</th>
      <th>Paiment</th>
      <th>Date d'achat</th>
      
      
    </tr>
  </thead>
  <tbody>

    <?php
     $client = $_SESSION['id'];
    $query = "SELECT * FROM commande where client= $client ";
    $result_tasks = mysqli_query($conn, $query);    

    while($row = mysqli_fetch_assoc($result_tasks)) { 
        $voiture=$row['voiture']?>
    <tr>
        <?php

             include 'config.php';

             $sel = "SELECT * FROM voiture where id = '$voiture'  ";
             $rs = $conn->query($sel);
             while($rws = $rs->fetch_assoc()){
        ?>
      <td> <h5> <?php echo $rws['marque']; echo ' '.$rws['modele']; ?> </h5> <br> 
        <img src="../img/products/<?php echo $rws['pic'];?>" alt=""> 
      </td> <?php }?>
      <td><?php echo $row['depart']; ?></td>
      <td><?php echo $row['retour']; ?></td>
      <td><?php echo $row['livraison']; ?></td>
      <td><?php echo $row['chauffeur']; ?></td>
      <td><?php echo $row['etat']; ?></td>
      <td><?php echo $row['prix']; ?></td>  
      <td><?php echo $row['paiement']; ?></td>
      <td><?php echo $row['date_achat']; ?></td>    
    </tr>
    <?php } ?>
        </tbody>
        </table>
         </tbody>
        </table>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Quantité</th>
      <th>Prix total</th> 
    </tr>
  </thead>
    <tbody>
   <?php
     $client = $_SESSION['id'];
    $query = "SELECT SUM(prix) as Prix_Total , count(prix) as Quantite FROM commande WHERE client=$client";
    $result_tasks = mysqli_query($conn, $query);    

    while($row = mysqli_fetch_assoc($result_tasks)) { 
        $prix_total=$row['Prix_Total'];
        $quantie=$row['Quantite']?>
    <tr>
      </td> <?php }?>
      <td><?php echo $quantie; ?></td>  
      <td><?php echo $prix_total; echo " dt"; ?></td>  
    </tr>
  </tbody>

 </table>
        <br>
    </div>
    <!-- Cart Page Section End -->

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
   <script src="js/jquery-ui.js" type ="text/javascript"></script>
    <script src="js/jquery.js" type ="text/javascript" ></script>
    <script src="js/jquery-3.3.1.min.js" type ="text/javascript" ></script>
    <script src="js/bootstrap.min.js" type ="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.datetimepicker.full.js"></script>
    <script >
      


        $("#datetime").datetimepicker()
          
       
       
    </script>


 <script >
    
$("#datetime2").datetimepicker()
    </script>
</body>

</html>
