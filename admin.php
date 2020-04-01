<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", Seja bem vindo(a)! <br>";
	echo "<b><a href='logout.php'>Sair</a>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: login.php");
}
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Apontamento</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/point.css" rel="stylesheet">
</head>
<body>
    <span class="border border-secondary"></span>
    <div class="p-3 mb-2 bg-light text-dark"></div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
	       <div class="container">
		      <div class="row">
                <div class="col"></div>
               <span style="position: absolute; top: 30 px; left: 100px;width: 90px; height: 61px; background-color: rgba(255,255,255,0);">
                <img src="logo2.png" class="img-fluid img-thumbnail">
            </span>
			     <h1><center><u>Apontamento de Horários</h1></center></u>
			         <div data-role="page" id="home">
                        <header data-role="header" data-position="">
                        </header>
                                <form method="post" action="aponthora.php">
                            <center><fieldset id="periodo" data-type="horizontal">
                            <input type="radio" name="posicao" id="entrada" value="entrada" class=form-control/>
                            <label for="entrada">Entrada</label>

                            <input type="radio" name="posicao" id="almoco" value="almoco" class=form-control/>
                            <label for="almoco">Almoço</label>

                            <input type="radio" name="posicao" id="retorno" value="retorno" class=form-control/>
                            <label for="retorno">Retorno</label>

                            <input type="radio" name="posicao" id="saida" value="saida" class=form-control/>
                            <label for="saida">Saída</label>
                            </fieldset></center><br>
                        </form>

                        <strong><u>Justificativa</u></strong><br><br>
                        <textarea class="form-control" rows="3"></textarea>
                    <br>
                        <input type='submit' name="btnConfirma" value="Confirmar" class = 'btn btn-success'> <?php echo "<a href='conecta.php'></a>"?>
                        <footer data-role="footer" data-position="fixed">
                            <div class="center_content">
                                <div data-role="controlgroup" data-type="horizontal"> <center><a href="aponthora.php" data-icon="grid" data-role="button"data-transition="slideup"><b>Histórico</a></center>
                                </div>
                            </footer>
                        </div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
	</body>
</html>
