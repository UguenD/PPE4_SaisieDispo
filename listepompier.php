<?php

include 'connectAD.php';

echo '<SELECT name="idpompier">';

$sql = "SELECT id, nom, prenom FROM pompier";
$cpt = compteSQL($sql);

if ($cpt>0){
    $results = tableSQL($sql);
    
    echo "select size=\"1\" name=\"numero\";";

    foreach ($results as $row){
        echo "<option value=$row[0]>$row[1] $row[2]</option>";
    }
}

?>