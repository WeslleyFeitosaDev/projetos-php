<?php
    

    
    $Alfabetom=range("A","Z");
    $Alfabetomin=range("a","z");

            

    $juntar_tudo=array_merge($Alfabetom,$Alfabetomin,);
        
    shuffle($juntar_tudo);



    $transformar_sar=implode("",$juntar_tudo);


    
    $codigo_gerado=substr($transformar_sar,0,4);

   

    
?>