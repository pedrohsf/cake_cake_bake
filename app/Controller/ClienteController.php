<?php

App::uses('EnderecoHelper', 'Controller/Helpers');


class ClienteController extends AppController{
    
    
    public $uses = array('Cliente','Bairro','Cidade','Endereco');
    
    
    public function index(){
        $this->Cliente->recursive = 3;
        $this->set('clientes',$this->Cliente->find('all'));
        
    }
    
    public function change_status($id = null){
        if($id != null){
            $this->Cliente->id = $id;
            if($this->Cliente->exists()){
                $cliente = $this->Cliente->find('first',array('conditions'=>array('Cliente.id_cliente'=>$id)));
                $cliente['Cliente']['id_cliente'] = $id;
                $nome = $cliente['Cliente']['nome'];
                $messagem = 'ativado';  
                if($this->Cliente->field('ativo')){
                    $cliente['Cliente']['ativo'] = 0;
                    $messagem = 'desativado';
                }
                else{
                    $cliente['Cliente']['ativo'] = 1;
                }
                if($this->Cliente->save($cliente)){
                    $this->Session->setFlash("O cliente $nome foi $messagem.", 'flash_sucess_custom', array(), 'clientWarning');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
        $this->Session->setFlash("Este Cliente não pode ser encontrado, tente novamente.", 'flash_fail_custom', array(), 'clientWarning');
        $this->redirect(array('action'=>'index'));
        
    }
    
    public function delete_cliente($id = null){
        if($id != null){
            $this->Cliente->id = $id;
            if($this->Cliente->exists()){
                $nome = $this->Cliente->field('nome'); 
                if($this->Cliente->delete()){
                    $this->Session->setFlash("O cliente $nome foi apagado.", 'flash_sucess_custom', array(), 'clientWarning');
                    $this->redirect(array('action'=>'index'));
                }else{
                    $this->Session->setFlash("Este Cliente não pode ser apagado.", 'flash_fail_custom', array(), 'clientWarning');
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
        $this->Session->setFlash("Este Cliente não pode ser encontrado, tente novamente.", 'flash_fail_custom', array(), 'clientWarning');
        $this->redirect(array('action'=>'index'));
    }
    
    /*
     * action responsável por salvar cliente
     */
    public function novo_cliente($id = null){
        if($this->request->is("post")){
            // novo cliente chegando
            $this->salvarCliente();
        }else{
            // cliente já existente para ser editado
            if($id != null){
                $this->Cliente->id = $id;
                if($this->Cliente->exists()){
                    $this->salvarCliente('editado');
                }
            }else{// se não é por que cliente não existe e não está sendo cadastrado
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
    /*
     * action responsável por prencher formulário para edição de algum cliente
     */
    public function edit_cliente($id = null){
        if(!empty($id) && $id != null){
            $this->Cliente->id = $id;
            if($this->Cliente->exists()){
                $this->Cliente->recursive = 3 ;
                $this->request->data = $this->Cliente->find('first',array('conditions'=>array('Cliente.id_cliente'=>$id)));
                $this->request->data['Cidade'] = $this->request->data['Endereco']['Bairro']['Cidade']; // organiza array para mostrar na tela
                $this->request->data['Bairro'] = $this->request->data['Endereco']['Bairro']; // organiza array para mostrar na tela
                $this->set('editando_cliente',true);
                $this->index(); // carrega tabela de clientes
                $this->render('/Cliente/index/'); // renderizar index
            }else{
                $this->Session->setFlash("Este Cliente não pode ser encontrado, tente novamente.", 'flash_fail_custom', array(), 'clientWarning');
                $this->redirect(array('action'=>'index'));
            }
        }else{
            $this->Session->setFlash("Este Cliente não pode ser encontrado, tente novamente.", 'flash_fail_custom', array(), 'clientWarning');
            $this->redirect(array('action'=>'index'));
        }
    }
    
    // codigo para salvar cliente, tanto editado quanto novo
    private function salvarCliente($stringMessage = 'salvo'){
        $errosAoValidar = $this->validaNovoCliente();
        if( empty( $errosAoValidar ) ){ // se passar nas validações
            $salvadorDeEndereco = new EnderecoHelper(); // chama helper para atribuir função de salvar
            $this->request->data['Cliente']['id_endereco'] = $salvadorDeEndereco->cadastrarEndereco($this->request->data);
            $this->Cliente->save($this->request->data); // salvar
            $this->Session->setFlash('Cliente '.$stringMessage.' com sucesso!', 'flash_sucess_custom', array(), 'clientWarning');
            $this->redirect(array('action'=>'index')); // renderizar index
        }else{ // se não passar nas validações
            $this->set("errors",$errosAoValidar); // enviar erros para a tela view
            $this->Session->setFlash("Cliente não pode ser ".$stringMessage.", tente novamente.", 'flash_fail_custom', array(), 'clientWarning');
            $this->index(); // carrega tabela de clientes
            $this->render('/Cliente/index/'); // renderizar index
        } 
    }
    // para saber se está validado o cliente, com base no que está sendo validado no model de cada Classe De Banco Mapiado
    private function validaNovoCliente(){
            $this->Cliente->set($this->request->data);
            $this->Cliente->validates();
            $errors = $this->Cliente->validationErrors; // buscar os erros
            
            $this->Endereco->set($this->request->data);
            $this->Endereco->validates();
            $errors += $this->Endereco->validationErrors; // buscar os erros
            
            $this->Cidade->set($this->request->data);
            $this->Cidade->validates();
            $errors += $this->Cidade->validationErrors; // buscar os erros
            
            $this->Bairro->set($this->request->data);
            $this->Bairro->validates();
            $errors += $this->Bairro->validationErrors; // buscar os erros
            
            return $errors;
    }
    
    
    
    
}