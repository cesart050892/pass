<?php

$password = "1234";
$encr;
if(!empty($encr)){
	$encr = password_hash($password, PASSWORD_BCRYPT);
}

$hash = "kiol";

$hash1 ='$2y$10$fa45fnbHXlcWA7z8t3IZ4eSAwZ3E6uKfn0KvFLkDD9ZOlM1ZBZ4TW';

$hash2 = '$2y$10$nrh6C7XN9dBk/AYJb0VNlO8rQDG5qmvrCNDrGba9Mq4sHJg5Xqt1G';

if(password_verify($password, $hash1 )){
	$log = "Hash 1".PHP_EOL;
	echo $log;
}else if (password_verify($password, $hash2 )){
	echo "Hash 2".PHP_EOL;
}else {
	echo "Falló";
}