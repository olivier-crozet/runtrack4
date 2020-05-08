<?php
/**
 * 
 */
class Date
{
	
	function getAll($year)
	{
		$r =  array();
		//recuperation du premier jours de l'année
		$date =strtotime($year.'-01-01');   
		//fini en fin d'anner
		    while(date('y',$date) <= $year) 
		    {
		    

		$y = date('y',$date);
		$m = date('n',$date);//le n enleve le zero devant le 01 du mois
		$d = date('j',$date);// le j enleve le zero devant le 01 du jour
		//change deux jour pour les avoir de 0 a 7
		$w = str_replace('0','7',date('w',$date));
		$r[$y][$m][$d] = $w;
		//+ 24h *3600 segonde
		$date = $date + 24 * 3600;
          	}
		return $r;
	}
}

?>