<?php
class ayam{
	public $suara,$berat,$jenis;
	public function __construct($suara,$berat,$jenis){
		$this->suara=$suara;
		$this->berat=$berat;
		$this->jenis=$jenis;
	}
	public function get_suara(){
		return $this->suara;
	}
	public function get_berat(){
		return $this->berat;
	}
	public function get_jenis(){
		return $this->jenis;
	}
	
}
?>