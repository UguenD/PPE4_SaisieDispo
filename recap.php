<?php 
    // $dispo=$_GET['heure'];

    $i = 0;
var_dump($_GET);

echo "<br />";

var_dump($_GET["lundi"]);


echo "<br />";
$jour = $_GET["lundi"];
var_dump($jour[1]);





    while($i<7){

        switch ($i) {
            case 0:
                $jour = $_GET["lundi"];
                break;
            case 1:
                $jour = $_GET["mardi"];
                break;
            case 2:
                $jour = $_GET["mercredi"];
                $dispo = "2";
                break;
            case 3:
                $jour = $_GET["jeudi"];
                $dispo = "3";
                break;
            case 4:
                $jour = $_GET["vendredi"];
                $dispo = "4";
                break;
            case 5:
                $jour = $_GET["samedi"];
                $dispo = "5";
                break;
            case 6:
                $jour = $_GET["dimanche"];
                $dispo = "6";
                break;
        }


        foreach($jour as $valeur) {
            //include 'connectAD.php';
            echo "La checkbox $valeur a été cochée<br>";
            /*$sql = "INSERT INTO disponibilite (matricule, hcreneau) VALUES (1, '".$valeur."');";
		    $result = executeSQL($sql);*/
        } 


        $i++;

   }


   /* if(isset($_POST['envoi'])){ // si formulaire soumis
        print_r($_POST['lundi']); // ici on récupère un tableau qui contient toutes les valeurs
    } */

    /* foreach($_GET['lundi[]'] as $valeur)
    {
       echo "La checkbox $valeur a été cochée<br>";
    } */
?>