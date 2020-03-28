<?php
include_once "conecta.php";

$date = date('d-m-Y H:i:s');

$sql ="SELECT `id_user`, `Entrada`, `Almoço`, `Retorno`, `Saída`, `Justificativa` FROM `horario` WHERE 1"; 

$rs = mysqli_query($conexao, $sql)
?>

<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
<title>Histórico</title></head>
<body>
      <div class="container-fluid">
       <div class="container">
        <div class="row">
          <link href="css/bootstrap.css" rel="stylesheet">
          <link href="css/point.css" rel="stylesheet">
          <span style="position: absolute; top: 30 px; left: 100px;width: 90px; height: 61px">
            <img src="logo2.png" class="img-fluid img-thumbnail">
          </span>
          <h1><strong><center><u>Histórico</u></center></strong></h1><br>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr>
                  <td><center>Entrada</center></td>
                  <td><center>Almoço</center></td>
                  <td><center>Retorno</center></td>
                  <td><center>Saída</center></td>
                </tr><br><b>
                <a href="admin.php">Voltar</a><br>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
              </body>
              </html>
