<?php
	class Utisak{
		
		private $ime;
		private $datum;
		private $tekst;
		
		public function setIme($ime){
			
			$this -> ime = $ime;
		}
		
		public function setTekst($tekst){
			
			$this -> tekst = $tekst;
		}
		
		public function setDatum ($datum){
			
			$this -> datum = $datum;
		}
		
		public function getIme(){
			
			return $this -> ime;
		}
		
		public function getTekst(){
			
			return $this -> tekst;
		}
		
		public function pretvoriDatum(){
			
			$tmp = explode("-", $this -> datum);
			$datum = $tmp[2] . "." . $tmp[1] . "." . $tmp[0];
			return $datum;
			
		}
	}