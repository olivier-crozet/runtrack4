
<?php

//function inscription()
  // {     

          
  $connexion=mysqli_connect("localhost","root","","bigjob");
if (isset($_POST["inscri"])) 
{


      if (!empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['password2'])) 
      {
                 if (($_POST['password']) == ($_POST['password2']))  
                 {    
                 	 //si utilisateur existe deja

                  $mail= htmlspecialchars($_POST["mail"]);
                 
                  $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));
                  $reqdoublon = "SELECT mail FROM `utilisateurs` where mail=\"$mail\";";           
                  $req=mysqli_query($connexion,$reqdoublon);               
                  $retour=mysqli_num_rows($req);
                 
                           if($retour==0)
                           {     
                           
                             $zero = 1;
                                 //insertion utilisateur                 
                            $help = "profilPics/profil.jpg";
                            $requete="INSERT INTO utilisateurs (mail,profilPic,password,id_droits)
                            VALUES (\"$mail\",\"$help\",\"$password\",\"$zero\")";    
                            $inser= mysqli_query($connexion, $requete);


                            /////selection de ID pour ID_utilisateur
                           $requette_selectionid = "SELECT id FROM utilisateurs";
                            $connexion_bdd_id = mysqli_query($connexion,$requette_selectionid);
                            $compte_le_nombreid = mysqli_num_rows($connexion_bdd_id);
                            $numero_dernier_inscrit = $compte_le_nombreid -1;
                            $dernier_id = mysqli_fetch_all($connexion_bdd_id);   
                            $nombreid = $dernier_id[$numero_dernier_inscrit][0];                    
                       ///////////$dernier_id[$numero_dernier_inscrit][0]; l'id du drenier inscrit

                           
                            /////insertion administrateurs
                            
                    
                            
                        
                             header("location: connexion.php");
                          
                          } 
                          else
                          {
                            echo "ce login existe deja !";
                          }
               }
               else
               {
                echo "les passwords ne sont pas identiques !";
               }
    }
  else
  {
    echo "tous les champs doivent etre complétés !";
  }

}

 
//} 
?> 
