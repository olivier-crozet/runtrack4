<?php
/**
 * 
 */
class Date
{
	var $days   = array('Lundi', 'Mardi','Mercredi','Jeudi','Vendredi', 'Samedi','Dimanche',);
	var $months = array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
	
	function getAll($year)
	{
		$r =  array();

		//////////////////////////////////////////////VERSION NON OBJET QUI MARCHE //////////////////////////////
		//recuperation du premier jours de l'année
		//$date =strtotime($year.'-01-01');   
		//fini en fin d'anner
		  //  while(date('y',$date) <= $year) 
		   // {
		    

		//$y = date('y',$date);
		//$m = date('n',$date);//le n enleve le zero devant le 01 du mois
		//$d = date('j',$date);// le j enleve le zero devant le 01 du jour
		//change deux jour pour les avoir de 0 a 7
		//$w = str_replace('0','7',date('w',$date));
		//$r[$y][$m][$d] = $w;
		//+ 24h *3600 segonde pour les anneer avec normal
        //$date + 24 * 3600;
		//ca c'est pour les bisextil
		//$date = strtotime(date('y-m-d',$date).'+1 DAY'); 
		   // }

///////////////////////////////////////:version objet attention a la mise a jour ovh////////////

		
		    $date = new DateTime($year.'-01-01');
		    while($date->format('Y') <= $year) 
		    {
		    
		    $y = $date->format('Y');
		    $m = $date->format('n');//le n enleve le zero devant le 01 du mois
		    $d = $date->format('j');// le j enleve le zero devant le 01 du jour
		//change deux jour pour les avoir de 0 a 7
		$w = str_replace('0','7',$date->format('w'));
		$r[$y][$m][$d] = $w;
		//creer un nouvel objet avec P1D pour + un jour
		$date->add(new DateInterval('P1D'));
	
		   }
          	
		return $r;
	}
}

?>