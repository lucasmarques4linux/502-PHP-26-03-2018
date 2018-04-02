<?php 

class MeuArquivo
{
	private $arquivo;

	public function __construct($path){
		$this->arquivo = $path;
	}

	public function pegaConteudo(){
		if (file_exists($this->arquivo)) {
			return file_get_contents($this->arquivo);
		} else {
			return "Arquivo não encontrado";
		}
	}

	public function pegaExtensao(){
		return pathinfo($this->arquivo)['extension'];
	}

	public function pegaNomeArquivo(){
		return basename($this->arquivo);
	}

	public function pegaTamanho(){
		return filesize($this->arquivo);
	}
}
echo "<pre>";
$file = new MeuArquivo('arquivo.txt');
print_r($file->pegaNomeArquivo());
print_r($file->pegaExtensao());
print_r($file->pegaTamanho());
print_r($file->pegaConteudo());