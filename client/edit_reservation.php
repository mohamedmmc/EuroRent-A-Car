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
                                <li><a href="../accueil.html">Se déconnecter</a></li>
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
                        <h2><span></span>Modifier votre réservation</h2>
                      
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="img/pancarte/adpromo.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->


       
      
      <?php

$title = '';
$description= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM reservation WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
  $voiture=$row['voiture'];
  $depart =$row['depart'];
  $retour =$row['retour'];
  $livraison =$row['livraison'];
  $chauffeur=$row['chauffeur'];
  $etat = $row['etat'];
  $prix = $row['prix'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  
  $depart =$_POST['depart'];
  $retour =$_POST['retour'];
  $livraison = $_POST['livraison'];
  $chauffeur=$_POST['chauffeur'];
  $etat = $_POST['etat'];
  $prix = $_POST['prix'];

  $query = "UPDATE reservation set depart ='$depart',retour = '$retour',livraison = '$livraison',chauffeur='$chauffeur',  etat = '$etat', prix = '$prix'  WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if($result) {
    echo "<script type = \"text/javascript\">
    alert(\"Modification effectué avec succés\");
    window.location = (\"gestion_panier.php\")
    </script>";
} else{
echo "<script type = \"text/javascript\">
    alert(\"Erreur\");
    window.location = (\"edit_reservation.php\")
    </script>";
}
  $_SESSION['message'] = 'Réservation modifier avec succés';
  $_SESSION['message_type'] = 'warning';  
}
?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">

      <form action="edit_reservation.php?id=<?php echo $_GET['id']; ?>" method="POST">
      
        
   
        <?php

             include 'config.php';

             $sel = "SELECT * FROM voiture where id = '$voiture'  ";
             $rs = $conn->query($sel);
             while($rws = $rs->fetch_assoc()){
        ?>
      <h5> <?php echo $rws['marque']; echo ' '.$rws['modele']; ?> </h5> <br> 
        <img src="../img/products/<?php echo $rws['pic'];?>" alt=""> 
        <input type=hidden id="test" value=<?php echo $rws['prix']; ?>>
      <?php }?>
          <div class="form-group">
            <a1>Départ : </a1>
            <input id="datetime" type="text" class="form-control" placeholder="Date départ"  onblur="calcul();recup();" name="depart" min="2018-01-01" max="2020-12-12" value="<?php echo $depart; ?>" >
          </div>
          <div class="form-group">
          <a1>Retour : </a1>
          <input id="datetime2"  type="text"  class="form-control" placeholder="Date retour"  onblur="calcul();recup();" name="retour"  min="2018-01-01" max="2020-12-12" value="<?php echo $retour; ?>" >
          </div>
          <div class="form-group">
          <a1>Livraison : </a1>
          <select name="livraison" class="form-control" value="<?php echo $livraison; ?>" placeholder="livraison">
            <option> Aéroport </option>
            <option> Agence </option>
            <option> Domicile </option>
      </select>
          </div>
          <div class="form-group">
          <a1>Chauffeur : </a1>
          <select name="chauffeur" class="form-control" value="<?php echo $chauffeur; ?>" placeholder="Chauffeur">
                      <option> Avec chauffeur </option>
                      <option> Sans chauffeur </option>
                    </select>   
          </div>
          <div class="form-group">
          <a1>Etat : </a1>
          <select name="etat" class="form-control" value="<?php echo $etat; ?>" >
            <option> En cours  </option>
            <option> Annulée </option>
            <option> Effectué </option>

      </select>
          </div>
          <div class="form-group">
          <a1>Prix : </a1>
 <input type="hidden" name="prix" class="form-control" id="prix"  autocomplete="off"  autofocus > 
                      <output class="form-control" id="afficheur" value="" ><?php echo $prix; ?></output> 

          
          </div>

         <button class="btn btn-secondary btn-lg" name="update">
          Modifier  
        </button> 
      </form>
      </div>
    </div>
  </div>
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
    <script type="text/javascript" > 
$('#datetime').datetimepicker({
    timepicker: true,
    datepicker: true,
    minDate: 0,
    onShow: function(ct){
        this.setOptions({
           maxDate: $('#datetime2').val() ? $('#datetime2').val() : false
        })
    }
})

$("#datetime2").datetimepicker({
    timepicker: true,
    datepicker: true,
    onShow: function(ct){
        this.setOptions({
            minDate: $('#datetime').val() ? $('#datetime').val() : false
        })
    }
})

function dateDiff(date1, date2){
    var diff = {}                           // Initialisation du retour
    var tmp = date2 - date1;
 
    tmp = Math.floor(tmp/1000);             // Nombre de secondes entre les 2 dates
    diff.sec = tmp % 60;                    // Extraction du nombre de secondes
 
    tmp = Math.floor((tmp-diff.sec)/60);    // Nombre de minutes (partie entière)
    diff.min = tmp % 60;                    // Extraction du nombre de minutes
 
    tmp = Math.floor((tmp-diff.min)/60);    // Nombre d'heures (entières)
    diff.hour = tmp % 24;                   // Extraction du nombre d'heures
     
    tmp = Math.floor((tmp-diff.hour)/24);   // Nombre de jours restants
    diff.day = tmp;
     
    return diff;
}

function calcul()
{
                    var date1 =  new Date(document.getElementById("datetime").value);
                    var date2 =   new Date(document.getElementById("datetime2").value);
                    var prix = document.getElementById("test").value;
                    var diff = dateDiff(date1, date2);
                    var total=((diff.day) )*prix;
                    
                    document.getElementById("prix").value =total;
                    
               }
               
               function recup(){
  var rechercher = document.getElementById("prix");
  var afficheur = document.getElementById("afficheur");
afficheur.value= rechercher.value;
}
    </script>
    
</body>

</html>
