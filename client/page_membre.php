<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p']) && ($_SESSION['r']=="admin")  ) 
{ 
	header ('location: interadmin/index.html');



}

// else { 
//       echo 'Veuillez vous connecter </br>';  
// 	  echo '<a href="./login.html">Cliquer pour se connecter</a>';

// }  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>