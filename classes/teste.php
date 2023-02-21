<?php



/**
 * ok   
 */
class Classe1 
{
	private $nome;
	private $idade;
	function __construct($nome,$idade)
	{
	
		$this->nome = $nome;
		$this->idade = $idade;
	}

	public function getnome(){
		return $this->nome;
	}

	public function getidade(){
		return $this->idade;
	}
}





?>