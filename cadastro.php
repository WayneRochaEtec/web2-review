<?php

require_once("user.class.php");

function register(){
	$user = new User();
	
	$user->setName(html_entity_decode($_POST['name'] ?: ""));
	$user->setAddress(html_entity_decode($_POST['address']) ?: "");
	$user->setDistrict(html_entity_decode($_POST['district']) ?: "");
	$user->setCep(html_entity_decode($_POST['cep']) ?: "");
	$user->setCity(html_entity_decode($_POST['city']) ?: "");
	$user->setCountry(html_entity_decode($_POST['country']) ?: "");
}

register();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>WEB || Review</title>
</head>
<body>
	<main class="w-100 h-100 d-flex justify-content-center align-items-center" style="height:100vh">
		<p class="display-2 align-center">
			Você foi cadastrado com sucesso!
		</p>
	</main>
</body>
</html>