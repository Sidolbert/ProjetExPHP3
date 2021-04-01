<?php

class Chien extends Animal{
	protected $race;
	
	function __construct($nomC, $tarifC, $nC, $qNC, $r){
		parent::__construct($nomC, $tarifC, $nC, $qNC);
		$this->race = $r;
	}
	
	function toString(){
		return parent::toString() . "Race : " . $race . "\n";
	}
}