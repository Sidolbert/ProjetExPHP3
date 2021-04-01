<?php

//interface déclarant des méthodes utilisées pour gérer les animaux de la boutique
interface GestionAnimaux{
	/*
	* Fonction représentant l'achat par la boutique d'un nouvel animal
	* On ajoute l'animal au stock de la boutique
	* on aurait mis à jour les fonds selon le tarif de l'animal si on gérait
	* l'aspect économique
	*/
	static function acheter($nouvelAnimal);
	
	/*
	* Fonction représentant la vente par la boutique d'un animal à un client
	* on supprime l'animal de la liste
	* dans l'état actuel du projet on ne gère pas le côté économique ou la * traçabilité des clients
	*/
	static function vendre($animal);
	
	/*
	* Fonction représentant l'action de faire manger un animal. On réduit les stocks de nourriture adaptée selon la quantité qu'en mange l'animal
	*/
	function manger();
}