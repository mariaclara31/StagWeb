<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

		<title>Login</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="form-signin" style="background: #D8BFD8;">
				<img src="local/logo.png" class="img-fluid img-thumbnail" alt="Imagem responsiva">
				<h2>Área restrita</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
						}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
						}
				?>
					<form method="POST" action="valida.php">
						<label>Usuário</label>
						<input type="text" name="usuario" placeholder="Digite seu matrícula" class="form-control"><br><br>

						<label>Senha</label>
						<input type="password" name="senha" placeholder="Digite a sua senha"class="form-control"><br><br>

						<input type="submit" name="btnLogin" value="Acessar"class="btn btn-success"><br><br>

						<h4>Você ainda não possui uma conta?</h4>
						<a href="cadastrar.php">Cadastre-se</a>
					</form>
				</div>
			</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
