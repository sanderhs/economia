<?php 
if(isset($_POST['insert'])){
	$quantidade = $_POST['quantidade'];

	$agua = $_POST['agua'];
	$cerveja = $_POST['cerveja'];
	$refri = $_POST['refri'];
	$suco = $_POST['suco'];

	$boi = $_POST['boi'];
	$porco = $_POST['porco'];
	$ling = $_POST['ling'];
	$frango = $_POST['frango'];

	$prato = $_POST['prato'];
	$copo = $_POST['copo'];
	$talher = $_POST['talher'];
	

	if($agua == 1){
		$agua = ($quantidade*500);	
	}else{
		$agua = 0;
	}
	if ($cerveja == 1) {
		$cerveja = ($quantidade*2000);
	}else {
		$cerveja = 0;
	}
	if ($refri == 1) {
		$refri = ($quantidade*1000);
	}else {
		$refri = 0;
	}
	if ($suco == 1) {
		$suco = ($quantidade*1000);
	}else{
		$suco = 0;
	}

	if($boi == 1){
		$boi = ($quantidade*300);	
	}else{
		$boi = 0;
	}
	if ($porco == 1) {
		$porco = ($quantidade*300);
	}else {
		$porco = 0;
	}
	if ($ling == 1) {
		$ling = ($quantidade*300);
	}else{
		$ling = 0;
	}
	if ($frango == 1) {
		$frango = ($quantidade*300);
	}else{
		$frango = 0;
	}

	if($prato == 1){
		$prato = ($quantidade*2);	
	}else{
		$prato = 0;
	}
	if ($copo == 1) {
		$copo = ($quantidade*3);
	}else {
		$copo = 0;
	}
	if ($talher == 1) {
		$talher = ($quantidade*2);
	}else{
		$talher = 0;
	}
	?>
	<div class="alert alert-success">
		Dados registrados com sucesso!
	</div>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Economia</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="container" align="center">
				<h1>Trabalho de Economia</h1>
				<h2>Quantidade de carne</h2>
				<a href="#"><img src="imagens/c1.png"></a>
				<h3><?php echo $boi ?>g</h3>
				<h2>Quantidade de bebida</h2>
				<a href="#"><img src="imagens/b1.png"></a>
				<h3><?php echo $cerveja ?>ml</h3>
				<a href="index.php"><button class="btn btn-primary">Voltar</button></a>
			</div>
		</div>
	</body>
	</html>
	<?php
}
?>