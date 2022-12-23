<?php

echo ("<pre>");
print_r($_SERVER);
echo ("</pre>");

$initpath = php_ini_loaded_file();
echo ("php.ini: ".$initpath);


?>