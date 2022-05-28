<?php


print_r($_POST);

$output = implode(",", $_POST);

$filename = "./userdata.csv";
$handle = fopen($filename, "w");
fwrite($handle, $output);
fclose($handle);


?>
