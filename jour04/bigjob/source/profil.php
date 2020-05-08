<!DOCTYPE html>
<html>
<head>

	<!--liens css-->
	 <link rel="stylesheet" type="text/css" href="../css/header.css">
	<!--liens bootsrtap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--liens bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Profil</title>
</head>
<body>

<header class="oc-bg-hover1">
	<?php
include("header.php");
?>
</header>

<main>
<h1 class="text-center">Profil</h1>
<article>
<!------------FOTO-------------->
	<div class="m-auto card col-lg-4" >
  <?php recupimageprofil(); ?>
  <div class="card-body">
  	<?php
  	if (isset($_SESSION['id'])) { ?>
  	
 <p class=" card-text"><?php  recupmail(); ?>.</p>
  </div>
<?php }
    ?>

  <!-------modif profil------>

<form action="" method="POST" enctype="multipart/form-data">
  <div class=" form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Modifier votre email.</small>
  </div>
  <div class="form-group">
    <label for="modif-Password">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <small id="emailHelp" class="form-text text-muted">Modifier votre paswword.</small>
    <br/>

<div class="form-group">
    <label for="exampleFormControlFile1">Modifier sa photo de Profil</label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
  </div>

  </div>
  <input name="modif" type="submit" class="btn btn-primary" value="modifier">
<?php
modif_foto()

?>

</form>



  

</article>





</main>

</body>
</html>