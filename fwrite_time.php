<?php 
    $init = time();
    for($i=0; $i<=1000; $i++){
        
        $myfile = fopen("tmp/newfile$i.txt", "w") or die("Unable to open file!");
        $txt = "Aplicando texto ".$i;
        fwrite($myfile, $txt);
     
        fclose($myfile);
    }

    echo "
    Finalizado en ".(time()-$init)."seg
    ";
?>