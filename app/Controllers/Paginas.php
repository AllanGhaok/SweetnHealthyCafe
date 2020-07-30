<?php
class Paginas extends Controller{
	
	public function index(){
		$dados = [
			'titulo'=> 'Sweet & Healthy Cafe - Página Inicial',
		];

		$this->view('paginas/home',$dados);
	}

	public function sobre(){
		$dados = [
			'tituloPagina'=> 'Sobre nós',
		];

		$this->view('paginas/sobre',$dados);
	}	
}

