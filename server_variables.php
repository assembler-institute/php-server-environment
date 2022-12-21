<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<hr>";

//php.ini
$iniRuta = php_ini_loaded_file();
if($iniRuta){
    echo "Cargando el fichero php.ini: ".$iniRuta;
} else {
    echo "El fichero php.ini no esta cargado";
}
?>