<?php

namespace App\Models;

class Player extends \Pragma\ORM\Model
{
	private $name;
	private $keyId;
	private $genome;
	private $role;
	private $paralysed;
	private $mutated;
	private $alive;

	public function __construct($name)
	{
		return parent::__construct('player');
		$this->name=$name;
	}

	public function setGenome($genome){
		if($genome>0){
			$genome=1;
		}elseif($genome<0){
			$genome=-1;
		}else{
			$genome=0;
		}
		$this->genome=$genome;
	}
		
	public function mutate(){
		if($this->genome<1){
			$this->mutated=1;
			return true;
		}
		return false;
	}

	public function cure(){
		if($this->genome>-1 || !$this->mutated){
			$this->mutated=0;
			return true;
		}
		return false;
	}

}
