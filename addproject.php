<?php

include ("config.php");
include ("connexion.php");
if ($_POST['description'])
{
$label=$_POST['label'];
$des = $_POST['description'];
$sql ='INSERT into projet(label,description) VALUES ("'.$label.'","'.$des.'")'; 


$sql1=mysqli_query($connect,$sql);





if(mysqli_error($connect)!="")
		{
			echo "Erreur : Projet Non ajoutée".mysqli_error($connect);
		}
		
$sql = 'SELECT id AS id_proj FROM projet WHERE label = "'.$label.'"'; 
		$req = mysqli_query($connect,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
		$data = mysqli_fetch_array($req);		
		

			foreach($_POST['membres'] as $valeur)
				{
					 $projet_id=$data['id_proj'];
				 
				   $req='INSERT INTO equipe VALUES("'. $projet_id.'","'.$valeur.'")';
				   mysqli_query($connect,$req);

				}
					
		mysqli_close($connect);
		  header('Location: index.php');

}
 

?>