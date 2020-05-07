



<?php


  $connexion=mysqli_connect("localhost","root","","bigjob");
if (isset($_POST['envoiconnexion'])) 
{echo "stringfdggggggggggggggggggggggggggggggggggggggggggggggg";
        if (!empty($_POST['mail']) && !empty($_POST['password']))
          {
            echo "aaee";
            $mail=htmlspecialchars($_POST['mail']);
            
            $password= password_hash($_POST["password"], PASSWORD_DEFAULT,array('cost'=> 12));


            //REQUETTE VERIFICATION
            $requete=("SELECT * FROM utilisateurs  where mail = '$mail' ");
            $sql=mysqli_query($connexion,$requete);
            $retour=mysqli_fetch_array($sql);  

            $reqid=("SELECT id FROM utilisateurs where mail = '$mail' ");
            $reqisql=mysqli_query($connexion,$reqid);
            $bostring=mysqli_fetch_all($reqisql);



           
             
                 if (password_verify($_POST['password'], $retour['password']))
                 {
                 echo "string";
                  
                  $_SESSION['id']=$bostring[0][0];
                  echo "connecté";
                  var_dump($_SESSION['id']);
                  //header("location: index.php");
                }
            else
            {
              echo "le mot de passe ou le login ne correspond pas !";
            }
          }
   else
   {
    echo "remplissez tous les champs !";
   }
}

 //  BOUTON DECONNEXION

   if (isset($_POST['envoideconnexion'])) 
   {
     unset($_SESSION['login']);
     unset($_SESSION['password']);
     header("location:index.php");
   }


?>