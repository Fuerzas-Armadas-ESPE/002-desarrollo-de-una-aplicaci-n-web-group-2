<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$rta=mail('denilc140698@gmail.com', "mensaje desde web: $subject", $message); 

var_dump($rta);



