<?php 

include 'connectAD.php';
include 'date.php';

$pompier = $_GET['idpompier'];
//echo $pompier;

$semaine = array(0 =>'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');

foreach ($semaine as $key => $day){
    //On récupère l'id du créneau et la date pour chaque jour de la semaine      
    //$i --> creneau/dispo
    for ($i=1; $i<=8; $i++){
        //si la case est coché
        if(in_array($i, $_GET[$day])){
            $creneau = $i;
            $dte = $listeJours[$key]->format('Y/m/d');
            //echo '<br/>Dispo num : '.$creneau.' date : '. $dte;
            
            $sql = "INSERT INTO dispo(idPompier, idCreneau, dateDispo)
            VALUES($pompier, $creneau, '$dte');";

            $result = executeSQL($sql);
        }
        
    }

}


?>