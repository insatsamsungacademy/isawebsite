<?php

include ("config.php");
include ("connexion.php");
if ($_POST['name'])
{
	$name=$_POST['name'];
	$familyname=$_POST['familyname'];
	$email =$_POST['email'];
	$phone =$_POST['phone'];
	$level=$_POST['level'];
	$speciality=$_POST['speciality'];
	$sql ='INSERT into membre(nom,prenom,email,niveau,specialite,tel) VALUES ("'.$name.'","'.$familyname.'","'.$email.'","'.$level.'","'.$speciality.'","'.$phone.'")'; 
	$sql1=mysqli_query($connect,$sql);

if(mysqli_error($connect)!="")
		{
			echo "Erreur : Projet Non ajoutée".mysqli_error($connect);
		}

		mysqli_close($connect);
header('Location: index.php');		

}
		?>
