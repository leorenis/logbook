<?php
final class Televisao{
	public $canal = 99;
}
// Ao executar esse script, obtemos um FATAL ERROR , pois não podemos herdar de nenhuma classe que seja final .
class TvDoQuarto extends Televisao{ 
	public $canal = 98;
}