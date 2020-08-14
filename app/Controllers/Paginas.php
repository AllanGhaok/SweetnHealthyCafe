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

	public function analise_cafe(){
		$dados = [
			'tituloPagina'=> 'Sobre nós',
		];

		$this->view('paginas/analise_cafe',$dados);
	}

	public function receitas(){
		$dados = [
			'tituloPagina'=> 'Sobre nós',
		];

		$this->view('paginas/receitas',$dados);
	}

	public function forum(){
		$dados = [
			'tituloPagina'=> 'Sobre nós',
		];

		$this->view('posts/forum',$dados);
	}

	public function cadastro(){
		$dados = [
			'tituloPagina'=> 'Sobre nós',
		];

		$this->view('usuarios/cadastro',$dados);
	}

	public function login(){
		$dados = [
			'tituloPagina'=> 'Sobre nós',
		];

		$this->view('usuarios/login',$dados);
	}
}

