<?php

/**
 * Exercice 1
 */

//Définir la classe Book ici

Class Book {

     protected  string $title ;
     protected  string $author ;
     protected  string $genre ;
     protected  string $description;
     private  string $dateInstanciation;


    public function __construct(){


            $this->dateInstanciation=date('d/m/Y à h:m:s');

      }

      
    
	function getTitle():string
    {
		return $this->title;
	}
	
	
    function setTitle(string $title): void 
    {
		$this->title = $title;
    }
	
    
	function getAuthor():string {
		return $this->author;
	}
	
	
    function setAuthor(string $author): void {
		$this->author = $author;
		
	}
	

	function getGenre():string {
		return $this->genre;
	}
	
	
	function setGenre(string $genre):void {
		$this->genre = $genre;
		
	}
	

	function getDescription():string {
		return $this->description;
	}
	
	

	function setDescription(string $description): void {
		$this->description = $description;
		
	}
	
	function getDateInstanciation(): string {
		return $this->dateInstanciation;
	}
	
    
    function setDateInstanciation(string $dateInstanciation): void {
		$this->dateInstanciation = $dateInstanciation;
		
	}
}
