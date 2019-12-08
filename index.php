<?php

require_once(dirname(__FILE__).'/vendor/autoload.php');

$inputString = file_get_contents('php://input');
error_log($inputString);

?>
