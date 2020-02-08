<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> </title>
		<link rel="stylesheet" href="/info/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
		<link rel="stylesheet" href="/info/bootstrap/css/style.css" crossorigin="anonymous">


	</head>	
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item ">
		        <a class="nav-link" href="../../">Home</a>
		      </li>
		      <li class="nav-item ">
		        <a class="nav-link" href="../adicionar">Cadastrar</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../listar">Listar</a>
		      </li>		     
		    </ul>		    
		  </div>
		</nav>
		<div class="container col-lg-8  mt-4">
			<h3> 
			Alterar cadastro:
			</h3>
			<div class="form">				
				<form  method="post" action="../salvarEdicao">
				
					<div class="form-group col-md-5">
						<label for="cliente">
							Cliente:
						</label>
						<input type="text" name="cliente" id="cliente" class="form-control" value="<?php echo $computador->cliente ?>" required>
					</div>
					<div class="form-group col-md-5">
						<label for="processador">
							Processador:
						</label>
						<input type="text" name="processador" id="processador" class="form-control" value="<?php echo $computador->processador ?>" required>
					</div>
					<div class="form-group col-md-5">
						<label for="placamae">
							Placa-Mãe:
						</label>
						<input type="text" name="placamae" id="placamae" class="form-control" value="<?php echo $computador->placamae ?>" required>
					</div>
					<div class="form-group col-md-5">
						<label for="placavideo">
							Placa de vídeo:
						</label>
						<input type="text" name="placavideo" id="placavideo" class="form-control" value="<?php echo $computador->placavideo ?>" required>
					</div>
					<div class="col-md-2">
						<input type="hidden" name="id" value="<?php echo $computador->id ?>">
					    <button type="submit" class="btn btn-dark" id="black">Atualizar</button>	
					</div>
			    
		    	</form>
		    </div>
		</div>
			
	</body>
</html>
