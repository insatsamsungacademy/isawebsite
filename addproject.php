<?php
include ("connection.php");
if (isset($_POST['label']))
{
	
	if (isset($_bdd)) echo "isset";
	$_bdd->query("INSERT INTO project (`label`,`descp`,`resp`) VALUES ('".$_POST['label']."','".$_POST['descp']."','".$_POST['id']."') ; ");
}
?>