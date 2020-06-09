<!DOCTYPE html>
<html lang="zxx">
<?php include'dbconfig.php' ?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EuroRent A Car | Réservation</title>

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
    <link rel="stylesheet" type="text/css" href="../css/sb-admin-2.css">

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
                         include 'config.php';
                          $query1 ="DELETE FROM `promotion` WHERE datef<CURRENT_DATE()" ;  mysqli_query($conn, $query1);
                        $sel = "SELECT * FROM voiture inner join promotion on voiture.modele=promotion.marquep where etat= 'disponible' ";
                          
                          $rs = $conn->query($sel);

                        while($rws = $rs->fetch_assoc()){

                          if   ($rws['prixfixe']==$rws['prix'])
                            { $id=$rws['id'];
                             $prixf= $rws['prix']*(1-($rws['prixp']/100));
                         $query1 =" UPDATE `voiture` SET `prix` = $prixf where id=$id ";  mysqli_query($conn, $query1);

                     }

                            //$query = "SELECT * FROM promotion  where marque=$marque";
                            //$result_tasks = mysqli_query($conn, $query); 
                            //if (mysqli_num_rows($result_tasks) == 0) {
            ?>
               <div class="col-lg-6 col-md-6">
                    <div class="single-product-item">
                    <a href="panier.php?id=<?php echo $rws['id'] ?>">
                                    <img class="thumb"  src="../img/products/promotion1.jpg" >           

                        <img class="thumb"  src="../img/products/<?php echo $rws['pic'];?>" >
                    </a>
                              
                     <div class="product-text">
                            <h3 href="panier.php?id=<?php echo $rws['id'] ?>"><?php echo $rws['marque'];?>  </h3>
                                 <h5><span ><?php echo $rws['modele'];?></span></h5>
                            </a>
                            <p><?php echo 'ancienPrix: ' .$rws['prixfixe']  ;?>  </p>
                            <p style="color:#FF0000";><?php echo 'nouveauPrix: ' .$rws['prixfixe']*(1-($rws['prixp']/100) );?> </p>                      
                        </div>
                    </div>
                </div>
            
              
            
            
                 <?php
                }
                 ?>
                 <?php
                         include 'config.php';
                        $sel = " SELECT * FROM voiture left join promotion on voiture.modele=promotion.marquep WHERE( promotion.marquep IS NULL AND etat= 'disponible') ";
                          
                          $rs = $conn->query($sel);

                        while($rws = $rs->fetch_assoc()){
                             if   ($rws['prixfixe']!=$rws['prix'])
                             {$id=$rws['id'];
                             $prixf= $rws['prixfixe'];
                         $query2 =" UPDATE `voiture` SET `prix` =  $prixf where id=$id ";  mysqli_query($conn, $query2);


                             }
                            //$marque=$rws['modele'];

                            //$query = "SELECT * FROM promotion  where marque=$marque";
                            //$result_tasks = mysqli_query($conn, $query); 
                            //if (mysqli_num_rows($result_tasks) == 0) {
            ?>
               <div class="col-lg-6 col-md-6">
                    <div class="single-product-item">
                    <a href="panier.php?id=<?php echo $rws['id'] ?>">
                        <img class="thumb" src="../img/products/<?php echo $rws['pic'];?>" >
                    </a>
                              
                     <div class="product-text">
                            <h3 href="panier.php?id=<?php echo $rws['id'] ?>"><?php echo $rws['marque'];?></h3>
                                 <h5><span ><?php echo $rws['modele'];?></span></h5>
                            </a>
                            <p><?php echo 'Prix : '.$rws['prixfixe'];?></p>
                        </div>
                    </div>
                </div>
            

            
            
                 <?php
                }
                 ?>

        </div>
    </section>   <!--  end listing section  -->



                
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
