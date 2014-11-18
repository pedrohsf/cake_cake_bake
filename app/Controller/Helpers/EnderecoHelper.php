<?php



App::uses('AppController', 'Controller');

class EnderecoHelper extends AppController{
    
    public $uses = array('Endereco','Bairro','Cidade');
     
    public function cadastrarEndereco($endereco){
        
        $endereco['Endereco']['id_bairro'] = $this->cadastrarBairro($endereco);
        
        if(!$this->Endereco->save($endereco)){
            pr($endereco);
            exit();
        };
        
        
        $retorno = $this->Endereco->find('first',array(
                                                'fields'=>'Endereco.id_endereco',
                                                'conditions'=>array(
                                                                    'Endereco.cep'=>$endereco['Endereco']['cep'],
                                                                    'Endereco.rua'=>$endereco['Endereco']['rua'],
                                                                    'Endereco.numero'=>$endereco['Endereco']['numero'],
                                                                    'Endereco.complemento'=>$endereco['Endereco']['complemento'],
                                                                    'Endereco.id_bairro'=>$endereco['Endereco']['id_bairro']
                                                                )
                                              )
                                 );
        return $retorno['Endereco']['id_endereco'];
    }
    
    
    private function cadastrarBairro($endereco){
        $endereco['Bairro']['id_cidade'] = $this->cadastrarCidade($endereco);
        $exist = $this->Bairro->find('first',array('conditions'=>array('Bairro.nome'=>$endereco['Bairro']['nome'])));
        
        if($exist == NULL || empty($exist)){
            $this->Bairro->save($endereco);
        }
        $retorno = $this->Bairro->find('first',array('fields'=>'Bairro.id_bairro','conditions'=>array('Bairro.nome'=>$endereco['Bairro']['nome'])));
        return $retorno['Bairro']['id_bairro']; 
        
    }
    
    public function cadastrarCidade($endereco){
        $exist = $this->Cidade->find('first',array('conditions'=>array('Cidade.nome'=>$endereco['Cidade']['nome'])));
        
        if(empty($exist)){
           $this->Cidade->save($endereco);
        }
      
        $retorno = $this->Cidade->find('first',array('fields'=>'Cidade.id_cidade','conditions'=>array('Cidade.nome'=>$endereco['Cidade']['nome'])));
        return $retorno['Cidade']['id_cidade'];
        
    }
    
     
    
  
}
