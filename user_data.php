<?php


$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];


$output = implode(",", $_POST);

$filename = "./userdata.csv";
$handle = fopen($filename, "w");
fwrite($handle, $output);
fclose($handle);

echo "NAME: " . $name . "<br>";
echo "EMAIL: " . $email . "<br>";
echo "DATE OF BIRTH: " . $dob . "<br>";
echo "GENDER: " . $gender . "<br>";
echo "COUNTRY: " . $country . "<br>";


?>