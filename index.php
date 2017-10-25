<?php
    $alleNamen = array("Jan Klaassen","Piet Ertsen","Johan de Geert","Rudolf Latens","Joost Remond");

    for($x=0; $x <= 4; $x++){
        voorstellen($alleNamen[$x]);
     }
    
    
    function voorstellen($naam){
        echo "Welkom ";
        echo $naam;
        echo " op deze kerst borrel";
        echo "<br><br>";
    }
?>