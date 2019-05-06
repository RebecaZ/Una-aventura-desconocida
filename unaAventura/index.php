<?php

$conect = mysqli_connect("localhost" , "root" , "", "aventura");

$sql = "SELECT * FROM personajes";

$result = mysqli_query($conect, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>hello</title>
	<link rel="stylesheet" href="fuentes/fuentes.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body background="img/estrellas.png">

<div class="container">
  <div style="">
   <a  href="reglog.php"> <img src="img/icono.png" width="4%" style="background:white; margin-left: 95%; border-radius: 5px;"></a>
  </div>

<nav class="row justify-content-center">

	<div class="col-lg-3 col-md-6 col-12 col-sm-12" >
		<img src="img/logo.png" width="100%" id="logo">
		<img src="img/menu.png" width="20%" id="hamb" class="d-md-none">
		<ul class="menu" >
				<li><a  href="#"><img id="img2" src="img/inicio.png" width="33%"   ></li>
				<li><a  href="#"><img id="img2" src="img/juego.png" width="33%"  ></li>
				<li><a  href="#"><img id="img2" src="img/libro.png" width="33%" ></li>
			</ul>

	</div>

	<nav class="col-lg-9 col-md-8 col-12 col-sm-8 d-none d-md-block mx-auto" style="width: 20%;" ">
		<ul id="pc">
				<li><a  href="#"><img id="img" class="1" src="img/inicio.png" width="20%"   ></li>
				<li><a  href="#"><img id="img" class="2" src="img/juego.png" width="20%"  ></li>
				<li><a  href="#"><img id="img" class="3" src="img/libro.png" width="20%" ></li>
			</ul>
	</nav>

</nav>

<header class="row">
	
	<div class="col-12 gris" >
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">

      <video controls class="d-block w-100" >

		<source src="vid/uad.mp4" >

	</video>
    </div>
    <div class="carousel-item">
     <video controls class="d-block w-100">

		<source src="vid/elglobo.mp4">

	</video>
    </div>
    <div class="carousel-item">
      <video controls class="d-block w-100">

		<source src="vid/1.mov">

	</video>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>	
		
</header>

</header>

<section class="row">

<?php 

while ($row = mysqli_fetch_array($result)) {

  echo '<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
 echo '<div class="modal-dialog" role="document">';
    echo '<div class="modal-content">';
      echo '<div class="modal-header">';

       echo '<h5 class="modal-title" id="exampleModalLabel">'; 
        echo $row["nombre"];

        echo '</h5>';

        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>';
      echo "</div>";

     echo '<div class="modal-body">';
        echo $row["descripcion"];
      echo '</div>';

      echo '<div class="modal-footer">';
        
      echo '</div>';

    echo '</div>';

  echo '</div>';

echo '</div>';

echo '<div class="personajes col-lg-6 col-md-12 col-12 col-sm-12" style="color:white;">';
	echo' <img class="card-img-top" ';
 echo 'src="';
 echo $row["foto"];
 echo '" alt="Card image cap">';
 echo '</div>';

echo '<div class="info col-lg-6 col-md-12	 col-12 col-sm-12" style = "margin-top:3%; color:white;
background: #3d277a;">';
		echo "<h1>";
    echo $row["nombre"]; 
    echo "</h1>";
    echo "<hr>";

    echo "<p>";
    echo $row["descripcion"]; 
    echo "</p>";
		
echo '<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal1" style="background-color: #3E277A; color:white;">Ver Más </button>';

	echo "</div>";

  }
      ?>

</section >

<section class="row ">

	<div class="col-lg-12 col-md-12	 col-12 col-sm-12 idk">
		<h1>Sinopsis:</h1>
		<p>Lorem ipsum dolor sit amet consectetur adipiscing elit faucibus massa molestie nibh, et nostra nunc sociis proin lacus curae malesuada condimentum porttitor, magna cum mi potenti purus elementum sed vitae sagittis platea. Justo himenaeos tristique fusce cum iaculis ullamcorper proin ad a convallis</p>

</div>

</section>

<footer class="row justify-content-center col-lg-12 col-md-12	 col-12 col-sm-12" >
		<img src="img/facebook.png" height="50px" height="50px" id="fb">
		<img src="img/twitter.png" height="50px" height="50px" id="tw">
		<img src="img/instagram.png" height="50px" height="50px" id="ins">
	</footer>
  <a href="#"><img data-toggle="modal" data-target="#exampleModal" src="img/varita.png" style="width: 8%;
       position: fixed;
       top: 95%;
       right: 2%;"></a>

       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contactenos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="contactenos.php" method="post">
    <label for="nom">Nombre:</label><br>
    <input id="nom" type="text" name="nombre"><br><br>

    <label for="com">Comentario:</label><br>
    <textarea id="com" name="comentario"></textarea><br>
    <input type="submit">
  </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<script src="js/codigo.js"></script>
</body>
</html>