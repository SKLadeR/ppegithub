<?php 
	//connexion avec classe
	class Connexion{
		private $host = "localhost" ;
		private $user = "root" ;
		private $pass = "" ;
		private $bdd = "null" ;
		public $db = "null" ;


		public function connect() {
				try
	     		{
		  			$this->db = new PDO('mysql:host=localhost;dbname=m2l;charset=utf8', 'root', '');
		 			//echo "vous etes connecte";
	    		}
	     		catch (PDOException $e)
	    		{
					die('Erreur : ' . $e->getMessage());
	     		}
			    return 0 ;
		}


		public function fetch($query) {
		
			$sth = $this->db->prepare($query);
			$sth->execute();
			$result = $sth->fetchALL();
			
			return $result ;

		}

	}