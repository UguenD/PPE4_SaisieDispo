<?php 

include 'connectAD.php';

    // $dispo=$_GET['heure'];

    $i = 0;
var_dump($_GET);

echo "<hr/>";

// var_dump($_GET["lundi"]);
// echo "<hr/>";
// var_dump($_GET["mardi"]);


echo "<br />";
$jour = $_GET["lundi"];
var_dump($jour[1]);
echo "<hr/>";
$jour = $_GET["mardi"];
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
                break;
            case 3:
                $jour = $_GET["jeudi"];
                break;
            case 4:
                $jour = $_GET["vendredi"];
                break;
            case 5:
                $jour = $_GET["samedi"];
                break;
            case 6:
                $jour = $_GET["dimanche"];
                break;
        }
        //echo $jour;


        // foreach($jour as $valeur) {
        //     echo "$valeur gfgf";
        //     echo "La checkbox $valeur de <br>";
        //     /*$sql = "INSERT INTO disponibilite (matricule, hcreneau) VALUES (1, '".$valeur."');";
		//     $result = executeSQL($sql);*/
        // } 
echo "<hr/>";
        foreach ($_GET["lundi"] as $index => $value){
            echo $index." :".$value."<br/>";
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