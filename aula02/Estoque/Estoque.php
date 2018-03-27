<?php 

class Estoque
{
	private $itens = [];
	public function add($item,$quantidade)
	{
		// if (isset($this->itens[$item])) {
		// 	$quantidade += $this->itens[$item];
		// }	
		// $this->itens[$item] = $quantidade;
			
		if (isset($this->itens[$item])) {
			$this->itens[$item] += $quantidade;
		} else {
			$this->itens[$item] = $quantidade;		
		}		
	}

	public function get($item)
	{
		if (isset($this->itens[$item])) {
			return $this->itens[$item];	
		}

		throw new InvalidArgumentException("Item não existe no estoque");
	}
}