<?php 
//if para inserir 
if(isset($_POST['insert'])){
	$quantidade = $_POST['quantidade'];

	//test para receber metodo post
	if(isset($_POST["agua"]) == 1){
		$agua = (($quantidade*200)/1000);	
	}else{
		$agua = 0;
	}
	if (isset($_POST["cerveja"]) == 1) {
		$cerveja = (($quantidade*2000)/1000);
	}else {
		$cerveja = 0;
	}
	if (isset($_POST["refri"]) == 1) {
		$refri = (($quantidade*600)/1000);
	}else {
		$refri = 0;
	}
	if (isset($_POST["suco"]) == 1) {
		$suco = (($quantidade*600)/1000);
	}else{
		$suco = 0;
	}

	if(isset($_POST["boi"]) == 1){
		$boi = (($quantidade*300)/1000);	
	}else{
		$boi = 0;
	}
	if (isset($_POST["porco"]) == 1) {
		$porco = (($quantidade*300)/1000);
	}else {
		$porco = 0;
	}
	if (isset($_POST["ling"]) == 1) {
		$ling = (($quantidade*150)/1000);
	}else{
		$ling = 0;
	}
	if (isset($_POST["frango"]) == 1) {
		$frango = (($quantidade*150)/1000);
	}else{
		$frango = 0;
	}

	if(isset($_POST["prato"]) == 1){
		$prato = ($quantidade*2);	
	}else{
		$prato = 0;
	}
	if (isset($_POST["copo"]) == 1) {
		$copo = ($quantidade*3);
	}else {
		$copo = 0;
	}
	if (isset($_POST["talher"]) == 1) {
		$talher = ($quantidade*2);
	}else{
		$talher = 0;
	}
	?>
	<!-- Alert -->
	<div class="alert alert-success">
		Dados registrados com sucesso!
	</div>
	<!-- Inicio HTML -->
	<!DOCTYPE html>
	<html>
	<head>
		<title>Hoje é Dia de Rock</title>
		<!-- Importaçoes -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="imagens/DIADEROCK.png" type="image/x-icon"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="container" align="center">
				<!-- Div com imagem "dia de rock" -->
				<div align="center">
				<a href="index.php" ><img src="imagens/DIADEROCK.png" height="200px" width="200px" align="center"></a></div>
				<!-- Div para dividir colunas -->
				<div id="bebidasresult" class="col-md-4" >
				<?php 
				if(isset($_POST["agua"]) == 1){ //test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Agua</h2>
				<a href="#"><img src="imagens/agua.png" height="150px" width="150px"></a>
				<h3> $agua Litro(s)</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				  
				if(isset($_POST["cerveja"]) == 1){//test para imprimir somente o que é usado
					//abrir HTML no meio do PHP 
					echo <<<HTML
				<h2>Quantidade de Cerveja</h2>
				<a href="#"><img src="imagens/b1.png" height="150px" width="180px"></a>
				<h3> $cerveja Litro(s)</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				  
				if(isset($_POST["refri"]) == 1){//test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Refrigerante</h2>
				<a href="#"><img src="imagens/refri.png" height="150px" width="150px"></a>
				<h3> $refri Litro(s)</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				 
				if(isset($_POST["suco"]) == 1){//test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Suco</h2>
				<a href="#"><img src="imagens/suco.png" height="150px" width="150px"></a>
				<h3> $suco Litro(s)</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				?>
				</div>
				<!-- Div para dividir colunas -->
				<div id="carnesresult" class="col-md-4">
						<?php 
				if(isset($_POST["boi"]) == 1){//test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Carne de Boi </h2>
				<a href="#"><img src="imagens/c1.png" height="150px" width="150px"></a>
				<h3> $boi Kg</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				  
				if(isset($_POST["porco"]) == 1){//test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Carne de Porco</h2>
				<a href="#"><img src="imagens/porco.png" height="150px" width="150px"></a>
				<h3> $porco Kg</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				  
				if(isset($_POST["ling"]) == 1){//test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Linguiça</h2>
				<a href="#"><img src="imagens/ling.jpg" height="150px" width="150px"></a>
				<h3> $ling Kg</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				  
				if(isset($_POST["frango"]) == 1){//test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Carne de Frango</h2>
				<a href="#"><img src="imagens/frango.jpg" height="150px" width="180px"></a>
				<h3> $frango Kg</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				?>
			    </div>

			    <!-- Div para dividir colunas -->
				<div id="carnesresult" class="col-md-4">
				<?php 
				if(isset($_POST["prato"]) == 1){//test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Pratos</h2>
				<a href="#"><img src="imagens/pratos.png" height="150px" width="150px"></a>
				<h3> $prato Uni.</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				 
				if(isset($_POST["copo"]) == 1){//test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Copos</h2>
				<a href="#"><img src="imagens/copos.png" height="150px" width="150px"></a>
				<h3> $copo Uni.</h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				 
				if(isset($_POST["talher"]) == 1){//test para imprimir somente o que é usado 
					//abrir HTML no meio do PHP
					echo <<<HTML
				<h2>Quantidade de Talheres</h2>
				<a href="#"><img src="imagens/talheres.jpg" height="150px" width="150px"></a>
				<h3> $talher Conjuto(s) </h3>
<!-- Fechar HTML ( não mover ) -->
HTML;
				}
				?>
				</div>		
			</div><!-- Fim do conteiner -->
		</div><!-- Fim da class row -->
		<!-- Botão centralizado -->
		<center><a href="index.php"><button class="btn btn-primary">Voltar</button></a></center>
	</body>
	</html>
<?php
}
?>