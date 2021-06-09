<?php

/**
 * Exercice 4
 */

//Ecrire du code ici

class Manga extends Book {

    private string $illustrator ;



	/**
	 * 
	 */
	function getIllustrator(): string {
		return $this->illustrator;
	}
	
	/**
	 * 
	 */
	function setIllustrator(string $illustrator): void {
		$this->illustrator = $illustrator;
		
	}
}