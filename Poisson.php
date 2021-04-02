<?php

class Poisson extends Animal{
	protected $espece;
	protected $habitat;
	
	function __construct($nomP, $tarifP, $nP, $qNP, $eP, $hP){
		parent::__construct($nomP, $tarifP, $nP, $qNP);
		$this->espece = $eP;
		$this->habitat = hP;
	}
	
	function toString(){
		return parent::toString() . "Espèce : " . $race . "\nHabitat : eau " . $habitat . "\n";
	}
	
	//fonction d'affichage récupérée du parent
}