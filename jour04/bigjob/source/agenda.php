

<!DOCTYPE html>
<html>
<head> 
<title>Laplateforme</title>
<!---java script -->

<script type = "text/javascript" src='https://code.jquery.com/jquery-3.4.1.js'></script>
	<!--link css materialize-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--liens css-->
  <link rel="stylesheet" type="text/css" href="../css/header.css">
  <link rel="stylesheet" type="text/css" href="../css/agenda.css">

  <!--liens bootsrtap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
  <!--liens bootstrap js-->
  


	<!------------------------java script-------------->
	<script type="text/javascript">
		/* le dolard est devant pour permetre l'insertion dautre librairi ;) */
		$.click(function(){		 //cache mes tableau
			$('.month').hide();
			/*$('.month:first').show();
			//active le month en cour by id
			$('.months a:first').addClass('active');
			var current = 1 ;
			$('.months a').click(function(){
				var month = $(this).attr('id').replace('linkMounth','');
				alert(month);
				return false;
			}); */
		});

	</script>


	
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
	<div class="periods">
	<div class="year"><?php echo $year ; ?></div>
	<div class="months">
		<ul>
			<?php foreach ($date->months as $id=>$m): ?><!--id du foreach donne un id aut incrementer au mois   //substr affiche 3 letre et les utf_8 sa debug les accents-->
			
			<li><a href="#"id="linkMounth"><?php echo $id+1 ; ?><?php echo utf8_encode(substr(utf8_decode($m),0,3)); ?></a></li>
     		<?php endforeach; ?>
		</ul>
	</div>
	          <!--affichage des mois -->
	<?php  $dates = current($dates); ?>
	<?php foreach ($dates as $m=>$days):  ?>
	</div>
		<div class="month" id="month<?php echo $m; ?>">
			<table>
				<thead>
					<tr> <!--affichage des jour ecrit-->
						<?php foreach ($date->days as $d):  ?><!--jour (lundi ect) de la semaine avec corespondance-->
						<!--ecrie les 3premier caractere -->
							<th><?php echo substr($d,0,3); ?></th> 
						<?php endforeach;  ?>
					</tr>
				</thead>
				<tbody>
					<tr> <!--affiche les jours ----------------------------------------------------------->
						<!-----$end et le numero du dernier jour de la semaine (pour enlever le colspan sinon sa bug avec $w )-->
					  <?php $end = end($days); foreach($days as $d=>$w):  ?>
					  	   <?php //place bien les jours 

					  	   if($d == 1): ?>
		<!-- je recupere le numero du jour -1 et je fait un colspan pour fusioner les celules pour caler le jour avec la date-->
					  	   <td colspan="<?php echo $w-1; ?>"class="oc-padding"></td>
					  	   <?php  endif; ?>
					 	<td class=" oc-padding"><?php  echo $d; ?></td>         
					 	<!--si c dimanche -->
					  	<?php  if($w == 7 ): ?>        
					  	 <!-- tu va a lignes-->
					  		 </tr></tr>               

					  <?php	endif; ?> 
					 <?php  endforeach; 
					// si c'est pas un dimanche 
					if ($end != 7) : ?>
					 
						 <td colspan="<?php echo $end-7  ; ?>" class="oc-padding"></td>    
				 <?php endif; ?>    

					</tr>
				</tbody>
			</table>
		</div>
		
	<?php endforeach; ?> 
	


		

<pre><?php print_r($dates); ?></pre>

</main>

<body>

</body>
</html>