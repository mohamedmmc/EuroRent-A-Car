<?php
    
    include("functions.php");

    $id = $_GET['id'];

    $query ="UPDATE `notifications` SET `status` = 'read' WHERE `id` = $id;";
    performQuery($query);

    $query = "DELETE from `notifications` where `id` = '$id';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $i){
            if($i['type']=='voiture'){
                echo "Vous avez reçu une nouvelle reservation".$i['date'];
                 

            }
        }
    }
     header('Location: gestionreservation.php');
?><br/>
