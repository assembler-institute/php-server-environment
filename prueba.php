<?php
if(isset($_REQUEST['edad'])){
    $edad = $_REQUEST['edad'];
}
if(isset($_REQUEST['edad'])){
    $nombre = $_REQUEST['nombre'];
}
print_r($_REQUEST);

echo "Me llamo $nombre y tengo $edad años";
?>
