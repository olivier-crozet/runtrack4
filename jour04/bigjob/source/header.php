
<?php
session_start();
include("fonction-profil.php");
?>

<link rel="stylesheet" type="text/css" href="css/header.css">

  <!--liens bootsrtap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--liens bootstrap js-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Laplateforme</title>


	
<ul class="nav nav-pills nav-fill ">

  <li class="nav-item oc-text-hover">
    <a class="nav-link text-white text-white  " href="accueil.php">Acceuil</a>
  </li>

<?php
if (!empty($_SESSION['id'])) { 
 $id=$_SESSION['id'];
recuplogin();
  ?>
<li class="nav-item oc-text-hover">
    <a class="nav-link text-white text-white" href="profil.php?<?php echo "id=$id" ?> " >profil</a>
 
  </li> 

  <li class="nav-item oc-text-hover" >
    <form action="" method="POST" class="nav-link text-white text-white " >
    <button name="deconnexion" class="oc-bg-hover1 oc-border-none" >Déconnecxion</button>
    </form>
  </li>

<?php }
else
{ ?>
<li class="nav-item oc-text-hover">
    <a class="nav-link text-white   " href="connexion.php">Connexion</a>
  </li>
<?php }
?>


  


</ul>





