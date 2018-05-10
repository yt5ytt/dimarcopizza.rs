<?php
	class Proizvod{
		
		private $vrsta_proizvoda;
		private $id;
		private $naziv;
		private $velicina;
		private $cena;
		private $kolicina;
		private $id_proizvoda;
		
		public function setVrsta_proizvoda($vrsta_proizvoda){
			
			$this -> vrsta_proizvoda = $vrsta_proizvoda;
		}
		
		public function setId($id){
			
			$this -> id = $id;
		}
		
		public function setNaziv($naziv){
			
			$this -> naziv = $naziv;
		}
		
		public function setVelicina($velicina){
			
			$this -> velicina = $velicina;
		}
		
		public function setCena($cena){
			
			$this -> cena = $cena;
		}
		
		public function setKolicina($kolicina){
			
			$this -> kolicina = $kolicina;
		}
		
		public function setId_proizvoda($id_proizvoda){
			
			$this -> id_proizvoda = $id_proizvoda;
		}
		
		public function getVrsta_proizvoda(){
			
			return $this -> vrsta_proizvoda;
		}
		
		public function getId(){
			
			return $this -> id;
		}
		
		public function getnaziv(){
			
			return $this -> naziv;
		}
		
		public function getVelicina(){
			
			return $this -> velicina;
		}
		
		public function getCena(){
			
			return $this -> cena;
		}
		
		public function getKolicina(){
			
			return $this -> kolicina;
		}
		
		public function getId_proizvoda(){
			
			return $this -> id_proizvoda;
		}
		
		
		
		
	}