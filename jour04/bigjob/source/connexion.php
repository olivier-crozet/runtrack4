<!DOCTYPE html>
<html>
<head>

	<title>Connexion</title>
<!--link css materialize-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <!--liens css-->
  <link rel="stylesheet" type="text/css" href="../css/header.css">
	 <!--liens bootsrtap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--liens bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<!---------------------FOMULAIRE-------------->
<main>
  

<header class="oc-bg-hover1">
<?php
include("header.php");
?>
</header>

  

<article class="col-xs-12 col-sm-12  align-items-center col-md-9  col-lg-5 m-auto">
	<form action="" method="POST" class=" p-5 mb-5 mt-5 oc-bg-hover1">
  <div class=" form-group">
    <label for="mail">Adresse Email </label>
    <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"> Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
  </div>
  <div class=" form-group">
    <label for="Password">Password</label>
    <input name="password" type="password" class="form-control" id="Password">
  </div>
<div class="d-flex justify-content-around">
  <button name="envoiconnexion" type="submit" class="btn btn-primary">Connexion</button>
  <a href="inscription.php">inscrivez vous !</a>
  </div>

  <div>
     <button name="deconection" type="submit" class="btn btn-primary">Déconnexion</button>
  </div>


  <?php
include("fonction-connexion.php");
  ?>
</form>
</article>


</main>
<footer class=" col-sm-12display page-footer">
  <article class="">
          <div class=" col-sm-12container">
            <div class="col-sm-12row">
              <div class="col-sm-12 col-lg-l6 s12">
                <h5 class="col-sm-12 white-text">Footer Content</h5>
                <p class="col-sm-12col-sm-12 grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col-sm-12 col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </article>  
        </footer>
</body>
</html>