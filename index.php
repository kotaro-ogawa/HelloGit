<?php

require_once './vendor/autoload.php';

$inputString = file_get_contents('php://input');
error_log($inputString);

?>
