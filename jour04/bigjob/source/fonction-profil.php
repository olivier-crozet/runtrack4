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




///////////////////////////////fonction recup image//////////////////////////////////////
function recupimageprofil()
{
	$connexion=mysqli_connect("localhost","root","","bigjob");
 if(isset($_GET['id']) AND $_GET['id'] > 0)
   {     
		$reqimg = ("SELECT profilPic FROM utilisateurs WHERE id = $idvisiter");
   }
    else
    {   
		$reqimg = ("SELECT profilPic FROM utilisateurs WHERE id =".$_SESSION["id"]);
    }
    $reqimgco = mysqli_query($connexion,$reqimg);
    $imgrecup = mysqli_fetch_array($reqimgco);
	  if (!empty($imgrecup[0])) 
	  {
?>
     <img class = "oc-img-profil" src="<?php echo $imgrecup[0] ; ?>" > 
<?php
     }
	 else
	 {  ?>
       <img class = "oc-img-profil" src="../profilPics/profil.jpg" >
           <?php
	 }
	 
 }



 function recupmail()
 {
 	$connexion=mysqli_connect("localhost","root","","bigjob");
 	$id=$_SESSION['id'];
 	$reqrecupmail ="SELECT mail FROM utilisateurs where id=$id" ;
 	$fusion_recup_mail = mysqli_query($connexion,$reqrecupmail);
 	$mail=mysqli_fetch_array($fusion_recup_mail);
 	echo $mail['mail'];
 }

function modif_foto()
{
	  //////////////////////////////////enregistrement de limage
	if (!empty($_POST['modif'])) {
		# code...
	
                               if (isset($_FILES['image']))
                                { echo "string";
                                 
                                   $taillemax = 2097152 ;  
                                   $extensionvalide = array('jpg', 'jpeg', 'gif', 'png');  
                                     if ($_FILES['image']['size'] <= $taillemax)
                                      { 
                                        // met tous les carractere en minuscule                                    1=limite de chaine
                                         $extensionupload = strtolower(substr(strchr($_FILES['image']['name'],'.'), 1));
                                         //verif extention
                                             if (in_array($extensionupload, $extensionvalide)) 
                                             {
                                               $chemin = "profilPics/".".".$_SESSION['id'].".".$extensionupload;
                                               $couenta = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
                                                    if ($couenta)
                                                     {
                                                     	$connexion=mysqli_connect("localhost","root","","bigjob");
                                                     	$id=$_SESSION['id'];
                                                      $requeteupdate ="UPDATE utilisateurs SET  profilPic = '$chemin'  WHERE id='$id'"; 
                         
                                                      $inser= mysqli_query($connexion,$requeteupdate);

                                                    //  header("location: profil.php");


                ///////////////////////////////////////verif l'identité pour modifier le profil////////////////////////////////////////
                                                      $connexion=mysqli_connect("localhost","root","","bigjob");
                                                      $id_user = $_SESSION['id'];
                                                      $requette_id = "SELECT id FROM utilisateurs where id = $id_user ";
                                                      $requette_id_connexion = mysqli_query($connexion,$requette_id);
                                                      $result_id = mysqli_fetch_assoc($requette_id_connexion);
      
                                                      $id_user_profil = $result_id['id'];
                                                  //    header("location: profil.php?id=".$id_user_profil."");

                                                     }
                                                     else
                                                     {
                                                       echo "erreur lors du telechargement !";
                                                     }
                                             }
                                             else
                                             {
                                              echo "votre imga doit etre au format jpg, jpeg, gif, png";
                                             }
                                      }
                                      else
                                      {
                                        echo "votre foto ne doit pas depasser 2 mo";
                                      }
                                 }   
                                 //fin avatar  
}


}








