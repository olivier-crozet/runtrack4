<?php
/**
 * 
 */
class Date
{
	
	function getAll($year)
	{
		$r =  array();
		$date =strtotime($year.'-01-01');   

		$y = date('y',$date);
		$m = date('m',$date);
		$d = date('d',$date);
		//change deux jour pour les avoir de 0 a 7
		$w = str_replace('0','7',date('w',$date));
		$r[$y][$m][$d] = $w;

		return $r;
	}
}

?>