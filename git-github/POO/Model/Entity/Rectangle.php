<?php

/**
 * Exercice 5
 */

//Ecrire votre classe ici

class Rectangle {

    private float  $length;
    private float  $width ;

// Mettre en place un constructeur qui permet d'initialiser 
//automatiquement à son instanciation les attributs de la classe Rectangle .

public  function  __construct($length, $width)
{
    $this->length=$length;
    $this->width=$width;
    
}

// checked if la figure est carré
 public function is_square():bool
  {
      return $this->length === $this->width;
       
  } 
  
// Calcul surface
  public function area() 
  {
    return $this->length*$this->width;  
  
  } 


  /**
	*/
	function getLength(): float {
		return $this->length;
	}
	
	/**
	 */
	function setLength(float $length): void {
		$this->length = $length;
	
	}
	/**
	 */
	function getWidth(): float {
		return $this->width;
	}
	
	/**
	 */
	function setWidth(float $width): void {
		$this->width = $width;
	
	}
} 