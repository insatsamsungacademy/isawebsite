<?php
 try {
         
            $_bdd = new PDO("mysql:host=localhost;dbname=isa",'root','admin123');
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
?>
