<?php require_once('header.php') ?>

<body>
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
	      <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo-yuri-silva-branco.png" alt=""></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">SOLUÇÕES</a></li>
	        <li><a href="sobre.php">SOBRE</a></li>
	        <li><a href="#">PORTFÓLIO</a></li>
	        <li><a href="#">CONTATO</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>



<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
         <source src="img/video-bckg-site.mp4" type="video/mp4">
    </video>
</div>

<div class="container">
	<div class="jumbotron">
	  <h1>Hello, world!</h1>
	  <p><a class="btn btn-info btn-lg" href="#" role="button">ACESSE MEU PORTFÓLIO</a></p>
	</div>
</div>



<?php require_once('footer.php') ?>