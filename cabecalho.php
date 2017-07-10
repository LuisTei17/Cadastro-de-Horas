<?php
	error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php  echo $titulo ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>
	<body>
		<nav class="navbar navbar-default">
		  	<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    	<div class="navbar-header">
		           <a class="navbar-brand" href="#">Brand</a>
		    	</div>
				<div class=" navbar-fluid navbar-inverse navbar-fixed-top nave">
			        <div class="container">	        	
			            <div class="navbar-header menu">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
			      			</button>
		            		<a href="index.php" class="navbar-brand">Login</a>
	            		</div>
	            		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                		<ul class="nav navbar-nav">
	                    		<li><a href="professorAr.php">Professor</a></li>
	                    		<li><a href="AlunoAr.php">Aluno</a></li>
	                		</ul>
	            		</div>
	        		</div>
    			</div>
    		</div>
    	</nav>

	   	 <div class="container">
	        <div class="principal">
