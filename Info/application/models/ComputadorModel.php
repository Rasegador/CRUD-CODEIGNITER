<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComputadorModel extends CI_model
{
	//Recebe e envia os dados do BD
	public function getComputadores()
	{
		//Recebe e armazena os dados do BD 
		$query = $this->db->get('computadores');

		//Envia os dados do BD
		return $query->result();
	}

	//Adiciona um novo registro ao BD
	public function addComputador($dados=null)
	{	
		//Verifica se foi passado $dados
		if($dados != null)
		{
			//Insere o registro no BD
			$this->db->insert('computadores',$dados);
		}
	}

	//Get computador by id
    public function getComputadorByID($id=NULL)
    {
	    if ($id != NULL)
	    {

	        //Verifica se a ID no banco de dados	       
	        $this->db->where('id', $id);     

	        //limita para apenas um regstro    
	        $this->db->limit(1);

	        //Armazena os valores na variavel $query
	        $query = $this->db->get("computadores"); 

	        //retornamos os valores
	        return $query->row();   
	    }
    } 

	//Atualizar um registro na tabela
    public function editarComputador( $dados = NULL , $id = NULL )
    {
    //Verifica se foi passado $dados e $id    
	    if ($dados != NULL && $id != NULL)
	    {
	        //Se foi passado ele vai a atualização
	        $this->db->update('computadores', $dados , array('id'=>$id));      
	    }	  
	    else
	    {
	    	//Redireciona para tela inicial
	    	redirect('/');
	    }
	    
    }  

    //Deleta um registro do BD
	public function apagarComputador($id=null)
	{
		//Verifica se foi passado $dados e $id 
		if($id != null)
		{
			//Deleta o registro do BD
			$this->db->delete('computadores', array('id'=>$id));
		}
		else
		{
			//Redireciona para tela inicial
			redirect('/');
		}
	}
}