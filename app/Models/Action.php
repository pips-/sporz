<?php

namespace App\Models;

class Action extends \Pragma\ORM\Model implements \JsonSerializable
{

	public function __construct()
	{
		return parent::__construct('action');
	}

	public function jsonSerialize()
	{
		return $this->fields;
	}
}
