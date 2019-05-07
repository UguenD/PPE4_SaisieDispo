<?php 
    // $dispo=$_GET['heure'];

    // $i = 0;

    // while($i<7){

    //     switch ($i) {
    //         case 0:
    //             $jour = "lundi";
    //             break;
    //         case 1:
    //             $jour = "mardi";
    //             break;
    //         case 2:
    //             $jour = "mercredi";
    //             $dispo = "2";
    //             break;
    //         case 3:
    //             $jour = "jeudi";
    //             $dispo = "3";
    //             break;
    //         case 4:
    //             $jour = "vendredi";
    //             $dispo = "4";
    //             break;
    //         case 5:
    //             $jour = "samedi";
    //             $dispo = "5";
    //             break;
    //         case 6:
    //             $jour = "dimanche";
    //             $dispo = "6";
    //             break;
    //     }


    //     foreach($_GET[$jour] as $valeur) { 
    //         echo "La checkbox $valeur a été cochée<br>";
    //         $sql = "INSERT INTO disponibilite (matricule, hcreneau) VALUES (1, '".$valeur."');";
	// 	    $result = executeSQL($sql);
    //     } 


    //     $i++;




    // }


    if(isset($_POST['envoi'])){ // si formulaire soumis
        print_r($_POST['lundi']); // ici on récupère un tableau qui contient toutes les valeurs
        }
    
    

/*
	
	if (!empty($dispo)) {
		include 'connectAD.php';

		
		
		if ($result){
			echo "<meta http-equiv='refresh' content='0;url=indextest.php?message=<font color=green> Ajout realise </font>'>";
        } else {
            echo "<meta http-equiv='refresh' content='0;url=indextest.php?message=<font color=red>  ".mysql_error().".... </font>'>";
        }

	} else {
        echo "<meta http-equiv='refresh' content='0;url=indextest.php?message=<font color=red> Renseigner l&#039;information... </font>'>";
    }
    */

?>