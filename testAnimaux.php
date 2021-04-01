<?php

require_once "Autoloader.php";
Autoloader::register();

$nourritureChat = new Nourriture("croquettes Miaou", 50);
$nourritureChien = new Nourriture("patée Ouaf", 30);
$nourriturePoisson = new Nourriture("granulées Blup", 100);

$mistigri = new Chat("Mistigri", 100, $nourritureChat, 1, "persan");
Animal::acheter($mistigri);
$felix = new Chat("Felix", 100, $nourritureChat, 1, "siamois");
Animal::acheter($mistigri);
$rantanplan = new Chien("Rantanplan", 100, $nourritureChien, 5, "indéterminée");
Animal::acheter($rantanplan);
$bubulle = new Poisson("Bubulle", 50, $nourriturePoisson, 1, "Poisson rouge", "douce");
Animal::acheter($bubulle);
$nemo = new Poisson("Nemo", 50, $nourriturePoisson, 1, "Poisson-clown", "salée");
Animal::acheter($bubulle);

var_dump($mistigri);
var_dump(Animal::$listeAnimaux);

Animal::vendre($mistigri);
//la fonction unset permet de supprimer une variable, brisant le lien entre ce nom et la valeur/l'objet contenu dedans
//attention : cela ne détruit pas complètement l'objet (ce qui est souvent utile et toujours important
//unset($mistigri);
//var_dump($mistigri);
//var_dump(Animal::$listeAnimaux);

for($i=0; $i<55; $i++){
	$mistigri->manger();
}

//plus d'information : test git
var_dump($mistigri);

