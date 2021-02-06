<?php
class Paginas extends Controller{
/* Observação:
	O conteúdo dessa Classe diz respeito à pasta "view/páginas" apenas. Outras pastas (exemplo: usuários, posts) vão precisar de outra classe para trabalhar diretamente à elas.
*/
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
			'tituloPagina'=> 'Análise de café',
		];

		$this->view('paginas/analise_cafe',$dados);
	}

	public function receitas(){
		$dados = [
			'tituloPagina'=> 'Receitas',
		];

		$this->view('paginas/receitas',$dados);
	}

	public function forum(){
		$dados = [
			'tituloPagina'=> 'Fórum',
		];

		$this->view('posts/forum',$dados);
	}

	public function cadastro(){
		$dados = [
			'tituloPagina'=> 'Cadastro',
		];

		$this->view('usuarios/cadastro',$dados);
	}

	public function login(){
		$dados = [
			'tituloPagina'=> 'Login',
		];

		$this->view('usuarios/login',$dados);
	}
}
