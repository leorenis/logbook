<?php
trait PostFacebook{
	abstract public function mensagem();
}

class PostSimples{
	use PostFacebook;
	// Obrigatoriamente tenho que implementar o metodo mensagem()... 
	public function mensagem(){
		return "Post contendo um texto\n";
	}
}

class ImagemPost{
	use PostFacebook;
	// Obrigatoriamente devo implementar o metodo mensagem(), devido a utilizacao da trait PostFacebook.
	public function mensagem(){
		return "Post contendo um texto, dentro do posto com imagem a imagem: {$this->imagem()} \n";
	}

	public function imagem(){
		return ':)'; // Faz de conta que isso é imagem (rsrs).
	}
}
// Post completo
$postcompleto = new ImagemPost();
echo $postcompleto->mensagem();

// Post simples
$postsimples = new PostSimples();
echo $postsimples->mensagem();