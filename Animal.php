<?php

//classe abstraite représentant les différents attributs et méthodes communs aux types d'animaux stockés en boutique, jamais instanciée en tant que telle
abstract class Animal implements GestionAnimaux{
	
	protected $nom;
	protected $tarif;
	protected $nourritureAnimal;
	protected $quantiteNourriture; //quantité de nourriture mangée à chaque repas par l'animal
	static $listeAnimaux = array();
	
	function __construct($nomA, $tarifA, $nA, $qN){
		$this->nom = $nomA;
		$this->tarif = $tarifA;
		$this->nourritureAnimal = $nA;
		$this->quantiteNourriture = $qN;
	}
	
	//getters/setters magiques pour gagner du temps
	public function __get($attr){
		return $this->$attr;
	}
	
	public function __set($attr, $value){
		$this->$attr = $value;
	}
	
	static function acheter($nouvelAnimal){
		self::$listeAnimaux[] = $nouvelAnimal;
	}
	
	static function vendre($animal){
		$recherche = self::indiceAnimal($animal->nom);
		if($recherche != -1){
			echo "vente de l'animal";
			//var_dump($animal);
			//cet unset va "supprimer" l'animal trouvé de la listeAnimaux
			//mais seulement de celle-ci
			unset(self::$listeAnimaux[$recherche]);
			//var_dump($animal);
		}else{
			echo "Cet animal n'est pas repertorié ! \n";
		}
		
	}
	
	public static function indiceAnimal($nom){
		foreach(self::$listeAnimaux as $indice=>$animal){
			if($animal->nom == $nom){
				return $indice;
			}
		}
		return -1;
	}
	
	
	function manger(){
		
		$resteNourriture = $this->nourritureAnimal->quantite -= $this->quantiteNourriture;
		//s'il ne reste plus assez de nourriture pour que l'animal mange demain
		if($resteNourriture <= $this->quantiteNourriture){
			echo "Rupture du stock de " . $this->nourritureAnimal->type . " !\n";
			if($resteNourriture < 0){
				$this->nourritureAnimal->quantite = 0;
				echo "Attention : " . $this->nom . " n'a pas assez à manger ! \n";
			}
			
		}
	}
	
	function toString(){
		return $this->get_class() . "\nNom : " . $this->nom . "\nTarif : " . $this->tarif . "\nNourriture : " . $this->nourritureAnimal->type . "\nAppétit : " . $this->quantiteNourriture . "/jour\n";
	}
	
	//affiche un animal
	function afficher(){
		echo $this->toString();
	}
	
	
	
}