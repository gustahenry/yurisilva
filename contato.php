<?php require_once('header.php') ?>
<body class="contato white">

	<div class="container">
	
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand black" href="index.php"><img class="logo" src="img/logo-yuri-silva.png" alt=""></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a class="black" href="#">SOLUÇÕES</a></li>
		        <li><a href="sobre.php">SOBRE</a></li>
		        <li><a href="portfolio.php">PORTFÓLIO</a></li>
		        <li><a class="ativa" href="contato.php">CONTATO</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>


		
		
			<div class="row">
				<div class="col-sm-7"></div>
				<div class="col-sm-5">
				<form action="">
					<h2>SOLICITE UM ORÇAMENTO</h2>

					<label for="">NOME COMPLETO</label>
					<input class="form-control" type="text">

					<label for="">E-MAIL</label>
					<input class="form-control" type="text">

					<label for="">DEIXE AQUI SUA MENSAGEM</label>
					<textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>

					<button class="btn btn-danger">ENVIAR</button>
				</form>
				<div class="social">
					<img src="img/facebook-preto.png" alt="">
					<img src="img/linkedin-preto.png" alt="">
					<img src="img/insta-preto.png" alt="">
				</div>
			</div>
		
			</div>
			
	</div>

	
<?php require_once('footer.php') ?>