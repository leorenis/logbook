<?php
class Televisao{
	private $canal = 98;
	final public function mudarCanal($canal){
		$this->canal = $canal;
	}
}

class TvDoQuarto extends Televisao{
	// Obtemos um FATAL ERROR como esperado, pois esse método é final .
	public function mudarCanal($canal){

	}
}