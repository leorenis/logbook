<?php
/**
 * Criando meu proprio wrapper
*/
class Zcpe {
	public $arquivo;

	public function stream_open($path, $modo) {
		$this->arquivo = fopen(str_replace('zcpe://', '', $path), $modo);
		if (!$this->arquivo) {
			throw new \Exception('Falha ao abrir o arquivo ' . $path);
		}
		return true;
	}

	public function stream_read($bytes){
		return fread($this->arquivo, $bytes);
	}

	public function stream_eof(){
		return feof($this->arquivo);
	}
}
// Registrando wrapper
stream_register_wrapper('zcpe', 'Zcpe');

$filepath = getcwd()."\arquivos\arquivo_wapper_file.txt";
print file_get_contents("zcpe://$filepath");