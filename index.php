<!DOCTYPE html>
<html>
<head>
	<title>Hoje é Dia de Rock</title>
	<!-- importaçoes -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="imagens/DIADEROCK.png" type="image/x-icon" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div align="center">
			<a href="index.php" ><img src="imagens/DIADEROCK.png" height="200px" width="200px" align="center"></a>
		</div>	
		<div id="conteiner" class="container">
			<form action="resultado.php" method="post" class="form-horizontal">
				<div class="row" align="center">
					<div class="col-md-4"></div>
					<div id="pessoas" class="form-group col-md-4">
						<h3>Pessoas</h3>
						<img src="imagens/team.png" height="80px" width="80px" align="center">
						<label>Quantas pessoas vão no rolê?</label>
						<input type="number" class="form-control" name="quantidade" placeholder="20" required="">
					</div><!-- Fim do formgroup -->
				</div><!-- Fim da row -->
				<br><br>
				<!-- Div da parte de bebidas do form -->
				<div id="bebidas" class="col-md-4" align="center">
					<img src="imagens/pint.png" height="80px" width="80px">
					<h3>Bebidas</h3>
					<div class="form-group" align="left">
						<br><br>
						<!-- Checkbox de bebidas -->	
						<div class="checkbox">
							<label><input type="checkbox" name="agua" value="on">Agua</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="cerveja" value="1">Cerveja</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="refri" value="1">Refrigerante</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="suco" value="1">Suco</label>
						</div>
					</div><!-- Fim formgroup -->
				</div><!-- Fim da div bebidas -->
				<!-- Div da parte de carnes do form -->				
				<div id="carnes" class="col-md-4" align="center">
					<img src="imagens/steak.png" height="80px" width="80px" align="center">
					<h3>Carnes</h3>
					<div class="form-group" align="left">
						<br><br>
						<!-- Checkbox de carnes -->	
						<div class="checkbox">
							<label><input type="checkbox" name="boi" value="1">Carne de Boi</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="porco" value="1">Carne de Porco</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="ling" value="1">Linguiça</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="frango" value="1">Frango</label>
						</div>
					</div><!-- Fim formgroup -->					
				</div><!-- Fim da div carnes -->
				<!-- Div da parte de descartáveis do form -->
				<div id="descartaveis" class="col-md-4" align="center">
					<img src="imagens/cutlery.png" height="80px" width="80px" align="center">
					<h3>Descartáveis</h3>
					<!-- checkbox de descartaveis -->
					<div class="form-group" align="left">
						<br><br>	
						<div class="checkbox">
							<label><input type="checkbox" name="prato" value="1">Pratos</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="copo" value="1">Copos</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="talher" value="1">Talheres</label>
						</div>
					</div><!-- Fim formgroup -->
				</div><!-- Fim da div descartáveis -->
				<!-- Botão que envia os dados para resultado.php ( alinhado ao centro) -->
				<center>
					<button type="submit" name="insert" class="btn btn-success">Calcular</button>
				</center>
			</div><!-- Fim conteiner -->		
		</form><!-- Fim do form -->  
	</div><!-- Fim da div row -->  
</body>
</html>
