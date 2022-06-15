<?php 

try{
				$bdd = new PDO('MariaDB:host=92.222.164.92; dbname=mka', 'mka' 'mka2k22', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);  
			}
				catch(Exception $e){
			die('Erreur : '. $e->getMessage());
			}

?> 