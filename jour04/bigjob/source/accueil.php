<!DOCTYPE html>
<html>
<head>

	<!--link css materialize-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--liens css-->
  <link rel="stylesheet" type="text/css" href="../css/home.css">

  <!--liens bootsrtap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--liens bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Laplateforme</title>
</head>
<body>

<header class="oc-border-none oc-bg-hover1 ">
<?php 
include("header.php");
?>
</header>
<main>

<br/>
<h1 class="text-center">Dispositif COVID-19-sras-2</h1>
<br/>


<article class=" justify-content-around row">
	<div class=" col-md-5 alert  oc-bg-hover1" role="alert">
  <h4 class="alert-heading">Nombre de Personnes dans l'établissement</h4>
  <p>Il y a actuelement ... Personnes dans l'etablissement.</p>
  <hr>
  <p class="mb-0">il reste plus que ... places disponibles .</p>
</div>

<div class="col-md-5 alert oc-bg-hover1" role="alert">
  <h4 class="alert-heading">Nombre de Personnes en ayant réserver pour la journer</h4>
  <p>Il y a actuelement ... Place réserver .</p>
  <hr>
  <p class="mb-0">suprimer sa reservation en cliquant <a href=""> ici.</a></p>
</div>
</article>

<article class="oc-text-hover" >
<div class="m-auto text-center col-md-8 alert alert-success" role="alert">
	<a href="desuite.php" class="col-md-8">
  <h4 class="text-danger alert-heading">venir desuite</h4>
  <p>Il y a actuelement ... Places disponible.</p>
  <hr>
  <p class="mb-0">il reste plus que ... places disponibles .</p>
	</a>
</div>
<br/>


<div class=" m-auto text-center col-md-8 alert alert-success" role="alert">
	<a  href="agenda.php" class="col-md-8  confirmation.php">
  <h4 class=" alert-heading">reserver seule</h4>
  <p>Il y a actuelement ... Places disponible.</p>
  <hr>
  <p class="mb-0">il reste plus que ... places disponibles .</p>
	</a>
</div>
<br/>

<div class="m-auto text-center col-md-8 alert alert-success" role="alert">
	<a class="oc-text-hover" href="col-md-8  confirmation.php">
  <h4 class=" alert-heading">reservation de groupe</h4>
  <p>Il y a actuelement ... Places disponible.</p>
  <hr>
  <p class="mb-0">il reste plus que ... places disponibles .</p>
	</a>
</div>
<br/>
</article>

</main>

<footer class="oc-bg-hover1 oc-bg-footer-acueil col-sm-12display page-footer">
  <?php include("footer.php");  ?>
</footer>
</body>
</html>