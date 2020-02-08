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
		        <a class="nav-link" href="../">Home</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="adicionar">Cadastrar</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="listar">Listar</a>
		      </li>		     
		    </ul>		    
		  </div>
		</nav>
		<div class="container col-lg-8  mt-4">
			<h3>
			Cadastrar computador:
			</h3>

			<form action="salvar" method="post">
				<div class="form">

					<div class="form-group col-md-5">
				      <label for="nomes" >Cliente:</label>
				      <input type="text" name="cliente" id="nomes" class="form-control" required>
				    </div>

				    <div class="form-group col-md-5">
				      <label for="processador">Processador:</label>
				      <input type="text" name="processador" id="processador" class="form-control" required>
				    </div>

				    <div class="form-group col-md-5">
				      <label for="placamae">Placa-Mãe:</label>
				      <input type="text" name="placamae" id="placamae" class="form-control" required>
				    </div>

				    <div class="form-group col-md-5">
				      <label for="placavideo">Placa de vídeo:</label>
				      <input type="text" name="placavideo" id="placavideo" class="form-control" required>
				    </div>

				</div>
				    <button type="submit" class="btn btn-dark" id="black">
							Cadastrar
		       		</button>	


			    </div>




		    </form>
		</div>
			
	</body>
</html>