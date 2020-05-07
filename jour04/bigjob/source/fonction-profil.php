<?php

function recuplogin()
{
	
	$connexion=mysqli_connect("localhost","root","","bigjob");
	
	
    if(isset($_GET['id']) AND $_GET['id'] > 0) 
    {     
		$idvisiter =$_GET['id'];
		$ocreqnom = ("SELECT mail FROM utilisateurs WHERE id = $idvisiter");
		$fusionreq = mysqli_query($connexion,$ocreqnom);
		$ocname = mysqli_fetch_assoc($fusionreq);
    }
	
    else
    {
		$ocreqnom = ("SELECT mail FROM utilisateurs WHERE id =".$_SESSION["id"]);
		$fusionreq = mysqli_query($connexion,$ocreqnom);
		$ocname = mysqli_fetch_assoc($fusionreq);
    }
}

if (isset($_POST['deconnexion']))
 {
	session_destroy();
}
?>