<?php
	class Dodatak{
		
		private $naziv;
		private $cena;
		
		public function setNaziv($naziv){
			
			$this -> naziv = $naziv;
			
		}
		
		public function setCena($naziv){
			
			$this -> cena = $cena;
			
		}
		
		public function getNaziv(){
			
			return $this -> naziv;
		
		}
		
		public function getCena(){
			
			return $this -> cena;
		
		}
		
	}


?>