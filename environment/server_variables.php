<?php
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

echo '<hr>';

// php.ini search
$inipath = php_ini_loaded_file();
if ($inipath) {
  echo 'Loaded php.ini: ' . $inipath;
} else {
  echo 'A php.ini file is not loaded';
}
