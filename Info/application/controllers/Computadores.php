<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Computadores extends CI_Controller 
{
	//Página inicial
	public function index()
	{		
		//Carrega a página inicial
		$this->load->view('welcome_message');
	}
 
	//Página de listagem
	public function listar()
	{
		//Carrega a model para receber os dados do BD
		$this->load->model('ComputadorModel','computadores');

		//Recebe e armazena os dados do BD
		$dados['computadores'] = $this->computadores->getComputadores();

		//Carrega a página com a lista e envia os dados do BD
		$this->load->view('list',$dados);
	}

	//Página de cadastro
	public function adicionar()
	{
		//Carrega a model que recebe os dados do BD
		$this->load->model('ComputadorModel','computadores');

		//Recebe e armazena os dados do BD
		$dados['computadores'] = $this->computadores->getComputadores();

		//Carrega a página de cadastro e envia os dados
		$this->load->view('add',$dados);
	}

	//Salva os dados enviados pela página de cadastro
	public function salvar()
	{
		//Carrega a model que recebe os dados do BD
		$this->load->model('ComputadorModel','computadores');

		//Recebe e armazena os dados do formulario de edição
		$dados['cliente'] = $this->input->post('cliente');
		$dados['processador'] = $this->input->post('processador');
		$dados['placamae'] = $this->input->post('placamae');
		$dados['placavideo'] = $this->input->post('placavideo');		
				
		//Envia $dados para addComputador
		$this->computadores->addComputador($dados);


		//Redireciona para tela inicial
		redirect("/");

	}
	//Salva os dados enviados pela página de edição
	public function salvarEdicao()
	{
		//Carrega a model
		$this->load->model('ComputadorModel','computadores');

		//Recebe e armazena os dados do formulario de edição
		$dados['cliente'] = $this->input->post('cliente');
		$dados['processador'] = $this->input->post('processador');
		$dados['placamae'] = $this->input->post('placamae');
		$dados['placavideo'] = $this->input->post('placavideo');
		$id = $this->input->post('id'); 
		$this->computadores->editarComputador( $dados, $id );
		redirect("/");
	}

	//Página de editar computador
	public function editar($id=NULL)	
	{						
		//Verifica se foi passado um ID, se não vai para a página inicial
		if($id == NULL) {
			redirect('/');
		}

		//Carrega a Model			
		$this->load->model('ComputadorModel', 'computadores');

		//Faz a consulta no banco de dados pra verificar se existe
		$query = $this->computadores->getComputadorByID($id);

		//Verifica se a consulta volta um registro, se não vai para a página inicial
		if($query == NULL) {
			redirect('/');
		}
		
		//Criamos uma array onde vai guardar os dados do computador e passamos como parametro para view
		$dados['computador'] = $query;

		//Carrega a View
		$this->load->view('edit', $dados);		
	}

	//Função apagar registro
	public function deletar($id=null)
	{
		//verifica se foi passado um valor através da variavel $id
		if($id == null)
		{
			redirect('/');
		}

		//Carrega a model
		$this->load->model('ComputadorModel','computadores');

		//Armazena o valor passado pela model
		$query = $this->computadores->getComputadorById($id);

		//Verifica se foi passado um valor
		if($query != null)
		{
			//Envia ID que deve ser deletado para a model
			$this->computadores->apagarComputador($query->id
			);
			//Carrega a página de registros
			redirect("/computadores/listar");

		}
		else
		{
			//Carrega a página de registros
			redirect("/computadores/listar");
		}
	}
	


}
