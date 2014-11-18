<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Endereco
 *
 * @author pedro
 */
class Endereco extends AppModel{
    
    public $primaryKey  = 'id_endereco';
    
     public $validate = array(
		'cep' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'O CEP é um campo obrigatório.',
				'required' => true,
			),
                        'between' => array(
                            'rule' => array('between', 8, 20),
                            'message' => 'O CEP deve ter entre 8 a 20 characters.'
                        )
		),
                'rua' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'A RUA é um campo obrigatório.',
				'required' => true,
			),
                        'between' => array(
                            'rule' => array('between', 5, 255),
                            'message' => 'A RUA deve ter entre 5 a 255 characters.'
                        )
		),
                'numero' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'O Número é um campo obrigatório.',
				'required' => true,
			)
		)
    );
     
    public $belongsTo = array(
		'Bairro' => array(
			'className' => 'Bairro',
			'foreignKey' => 'id_bairro',
			'conditions' => '',
			'fields' => '',
			'order' => ''
            )
    );
    
}
