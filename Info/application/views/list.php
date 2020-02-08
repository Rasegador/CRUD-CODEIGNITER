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
		      <li class="nav-item">
		        <a class="nav-link" href="../">Home</a>
		      </li>
		      <li class="nav-item ">
		        <a class="nav-link" href="adicionar">Cadastrar</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="">Listar</a>
		      </li>		     
		    </ul>		    
		  </div>
		</nav>
		<div class="container col-lg-8  mt-4">
			<h3>Computadores cadastrados:</h3>
			<table class="table container ">
			  	
			  
				
				<thead>
				    <tr>
					    <th scope="col">ID</th>
					    <th scope="col">Cliente</th>
					    <th scope="col">Processador</th>
					    <th scope="col">Placa-Mãe</th>
					    <th scope="col">Placa de vídeo</th>
			    	</tr>
			    </thead>
			    <tbody>
				  <?php
				  $contador = 0;
				  foreach ($computadores as $computador) 
				  {
				  	$contador++;
				  	echo '<tr>';
					  	echo '<td>'.$computador->id.'</td>';
					  	echo '<td>'.$computador->cliente.'</td>';
					  	echo '<td>'.$computador->processador.'</td>';
					  	echo '<td>'.$computador->placamae.'</td>';
					  	echo '<td>'.$computador->placavideo.'</td>';
				            echo '<td>';
				            	echo '<a class="button" href="editar/'.$computador->id.'" class="btn btn-dark" id="black">Editar </a>';
				            echo '</td>';
				            echo '<td>';
				            	echo '<a class="button" href="deletar/'.$computador->id.'" class="btn btn-dark" id="black">Excluir </a>';
							echo '</td>';	
					echo '</tr>';		            	      				    		    			
				   }

				   	?>
				</tbody>
			</table>
		</div>	   
	</body>
</html>