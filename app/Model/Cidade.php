<?php



class Cidade extends AppModel{
    //put your code here
    
    public $primaryKey  = 'id_cidade';
    
     public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Você deve preencher o nome',
				'required' => true,
			),
                        'between' => array(
                            'rule' => array('between', 5, 255),
                            'message' => 'A Cidade deve ter entre 5 a 120 characters'
                        )
		)
    );
    
     
}
