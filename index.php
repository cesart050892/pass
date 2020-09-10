<?php

$password = "admin";
$encr = password_hash($password, PASSWORD_BCRYPT);

if(password_verify($password, $encr)){
	echo "Uso correcto";
}else{
	echo "Error de manejo";
}