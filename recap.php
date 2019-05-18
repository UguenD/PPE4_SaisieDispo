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
$jours = $_GET["lundi"];
var_dump($jours[0]);
echo "<hr/>";
$jours = $_GET["mardi"];
var_dump($jours[0]);





    while($i<7){

        switch ($i) {
            case 0:
                $jours = $_GET["lundi"];
                break;
            case 1:
                $jours = $_GET["mardi"];
                break;
            case 2:
                $jours = $_GET["mercredi"];
                break;
            case 3:
                $jours = $_GET["jeudi"];
                break;
            case 4:
                $jours = $_GET["vendredi"];
                break;
            case 5:
                $jours = $_GET["samedi"];
                break;
            case 6:
                $jours = $_GET["dimanche"];
                break;
        }
        //echo $jours;


        // foreach($jours as $valeur) {
        //     echo "$valeur gfgf";
        //     echo "La checkbox $valeur de <br>";
        //     /*$sql = "INSERT INTO disponibilite (matricule, hcreneau) VALUES (1, '".$valeur."');";
		//     $result = executeSQL($sql);*/
        // }
        
        foreach($jours as $cle1 => $valeur1)
        {
            echo "personne n :" . $cle1 . "<br />";

                foreach ($valeur1 as $cle2=>$valeur2)

                {
                     echo "Clé : ".$cle2 .", Valeur: " . $valeur2 . "<br />\n";
                }
            }




echo "<hr/>";
        // foreach ($_GET["mercredi"] as $index => $value){
        //     echo $index." :".$value."<br/>";
        //  }

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