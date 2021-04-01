<?php
//classe représentant les nourritures stockées à but de consommation par les animaux
class Nourriture{
	protected $type;
	protected $quantite; //quantité en stock
	static $listeNourriture = array();
	
	function __construct($type, $q = 0){
		$this->type = $type;
		$this->quantite = $q;
		$recherche = self::indiceNourriture($type);
		if($recherche == -1){
			self::$listeNourriture[] = $this;
		}else{
			self::$listeNourriture[$recherche]->quantite += $q;
			//en option ici : appel de la fonction destructeur $this->__destruct();
		}
		
	}
	
	//getters/setters magiques pour gagner du temps
	public function __get($attr){
		return $this->$attr;
	}
	
	public function __set($attr, $value){
		$this->$attr = $value;
	}
	
	//méthode renvoyant l'indice de la nourriture si elle est trouvée dans notre liste, sinon -1
	public static function indiceNourriture($nom){
		foreach(self::$listeNourriture as $indice=>$nourriture){
			if($nourriture->nom == $nom){
				return $indice;
			}
		}
		return -1;
	}
	
	
}