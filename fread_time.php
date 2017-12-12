<?php 
    $init = time();
 
    $nombre_fichero = "texto.html";
    $gestor = fopen($nombre_fichero, "r");
    $contenido = fread($gestor, filesize($nombre_fichero));
    fclose($gestor);
    print $contenido;

    echo "
    Finalizado en ".(time()-$init)."seg
    ";
?>