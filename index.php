<?php
    $alleNamen = array("Jan Klaassen","Piet Ertsen","Johan de Geert","Rudolf Latens","Joost Remond", "Fredje Karl", "Dolf Meeuwissen");
    $bijdragen = array(122,22,33,0,44,22,122);
    
    $lengteEersteArray = count($alleNamen);
    echo $lengteEersteArray;
    $lengteTweedeArray = count($bijdragen);
    echo $lengteTweedeArray;
    
    if($lengteTweedeArray == $lengteEersteArray){
        echo "HET KLOPT";
    }else{
        echo "HET KLOPT NIET";
    }
    
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    echo "<hr>";
    
    
    
    
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