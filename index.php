<?php
    $alleNamen = array("Jan Klaassen","Piet Ertsen","Johan de Geert","Rudolf Latens","Joost Remond", "Fredje Karl", "Dolf Meeuwissen");

    for($x=0; $x < count($alleNamen); $x++){
        if($alleNamen[$x] == "Johan de Geert"){
            continue;
        }
        voorstellen($alleNamen[$x]);            
        
     }
    
    
    function voorstellen($naam){
        echo "Welkom ";
        echo $naam;
        echo " op deze kerst borrel";
        echo "<br><br>";
    }
?>