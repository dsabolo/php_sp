<?php 
    $init = time();
    for($i=0; $i<=1000000; $i++){
        print "Variable en valor ".$i."
        ";
    }

    echo "Finalizado en ".(time()-$init)."seg";
?>