
<?php
        try{
			//connexion a la base de donnee
			$access=new pdo("mysql:host=localhost;dbname=restaurant;", "root", "");
			$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		}catch (Exception $e){
			$e->getMessage();
		}     
?>