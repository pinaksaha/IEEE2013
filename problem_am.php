<?php 

	
class Points{

	public $currentPos;
	public $nextPos;
	public $value;

	public function __construct($currentPos)
	{
		$this->currentPos = $currentPos;
		$this->nextPos = 0;
		$this->value = 0;
	}

	public function getCurrentPos()
	{
		return $this->cureentPos;
	}

	public function setNextPost($pos)
	{
		$this->nextPos = $pos;
	}

	public function setCost($cost)
	{
		$this->value = $cost;
	}
}

class Grid
{
	$paths = array();

	public function __construct($fileDir)
	{

	}
}

?>