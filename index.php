<?php
    $alleNamen = array("Jan Klaassen","Piet Ertsen","Johan de Geert","Rudolf Latens","Joost Remond", "Fredje Karl", "Dolf Meeuwissen");
    $bijdragen = array(122,22,33,0,44,22,122);

    if(count($alleNamen) != count($bijdragen)){
        echo "HET KLOPT NIET";
    }
        
    for($x=0; $x < count($alleNamen); $x++){
        if($alleNamen[$x] == "Johan de Geert"){
            continue;
        }
        voorstellen($alleNamen[$x], $bijdragen[$x]);            
     }     
     
    function voorstellen($naam, $bedrag){
        echo "Welkom ";
        echo $naam;
        echo " op deze kerst borrel";
        echo "betalen: ".$bedrag;
        echo "<br><br>";
    }
?>