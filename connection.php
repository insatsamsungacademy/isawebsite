<?php
 try {
         
            $_bdd = new PDO("mysql:host=localhost;dbname=isa",'root','');
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
?>
