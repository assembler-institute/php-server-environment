<?php

$inipath = php_ini_loaded_file();
echo 'Loaded php.ini: ' . $inipath;

date_default_timezone_set('Europe/Madrid');
ini_set('date.timezone', 'Europe/Madrid');
ini_set('max_execution_time', '60');

phpinfo();
?>

