<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bairro
 *
 * @author pedro
 */
class Bairro extends AppModel{
    
    
    public $primaryKey  = 'id_bairro';
    
     public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'O BAIRRO é um campo obrigatório.',
				'required' => true,
			),
                        'between' => array(
                            'rule' => array('between', 0, 255),
                            'message' => 'O nome deve ter entre 0 a 255 characters'
                        )
		)
    );
     
     
      public $belongsTo = array(
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'id_cidade',
			'conditions' => '',
			'fields' => '',
			'order' => ''
            )
    );
    
}
