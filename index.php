<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<title>Exemplo de Formulario</title>
	</head>
	<body>
		<main class="w-100 h-100 d-flex justify-content-center align-items-center">
			<form method="POST" action="cadastro.php">
				<fieldset class="form-group">
					<label for="name">Nome</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Seu nome" required>
				</fieldset>
				<fieldset class="form-group">
					<label for="address">Endereço</label>
					<input type="text" class="form-control" name="address" id="address">
				</fieldset>
				<fieldset class="form-group">
					<label for="district">Bairro</label>
					<input type="text" class="form-control" name="district" id="district">
				</fieldset>
				<fieldset class="form-group">
					<label for="cep">CEP</label>
					<input type="text" class="form-control" name="cep" id="cep">
				</fieldset>
				<fieldset class="form-group">
					<label for="city">Cidade</label>
					<input type="text" class="form-control" name="city" id="city">
				</fieldset>
				<fieldset class="form-group">
					<label for="country">Estado</label>
					<input type="text" class="form-control" name="country" id="country">
				</fieldset>
				<input type="submit" class="btn btn-primary" name="Cadastrar">
			</form>
		</main>
	</body>
</html>