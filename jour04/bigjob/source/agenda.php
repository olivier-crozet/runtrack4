

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
	<title>agenda</title>
</head>

<header class="oc-border-none oc-bg-hover1 ">
<?php 
include("header.php");

?>
</header>

<main>
	<?php
include("fonction-agenda.php");
	$date = new Date();
	$year =  date('Y');
	$dates = $date->getAll($year);
	
	?>
	<div class="years"><?php echo $year ; ?></div>
	<div class="months">
		<ul>
			<?php /////id du foreach donne un id aut incrementer au mois   //substr affiche 3 letre et les utf_8 sa debug les accents
			foreach ($date->months as $id =>$m){ ?>
			<li><a href="#"id="linkMounth"><?php echo $id+1 ; ?><?php echo utf8_encode(substr(utf8_decode($m),0,3)); ?></a></li>

			<?php } ?>
		</ul>

	</div>
<pre><?php print_r($dates); ?></pre>

</main>

<body>

</body>
</html>