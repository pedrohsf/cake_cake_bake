<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author pedro
 */
class Cliente extends AppModel{
    
    public $primaryKey  = 'id_cliente';
    
    public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'O Nome é um campo obrigatório.',
				'required' => true,
			),
                        'between' => array(
                            'rule' => array('between', 5, 120),
                            'message' => 'O Nome deve ter entre 5 a 120 characters'
                        )
		),
                'cpf_cnpj' => array(
                               'notEmpty' => array(
                                       'rule' => array('notEmpty'),
                                       'message' => 'O CPF/CNPJ é um campo obrigatório.',
                                       'required' => true,
                               ),
                               'between' => array(
                                   'rule' => array('between', 11, 20),
                                   'message' => 'O CPF/CNPJ deve ter entre 11 a 20 characters.'
                               )
		),
                'telefone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'O Telefone é um campo obrigatório.',
				'required' => true,
			),
                        'between' => array(
                            'rule' => array('between', 8, 20),
                            'message' => 'O Telefone deve ter entre 8 a 120 characters'
                        )
		),
                'inscricao_estadual' => array(
                               'notEmpty' => array(
                                       'rule' => array('notEmpty'),
                                       'message' => 'A Inscrição Estadual é um campo obrigatório.',
                                       'required' => true,
                               ),
                               'between' => array(
                                   'rule' => array('between', 7, 20),
                                   'message' => 'A Inscrição Estadual deve ter entre 7 a 20 characters'
                               )
		),
                'email' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'O Email é um campo obrigatório.',
				'required' => true,
			),
                        'between' => array(
                            'rule' => array('between', 5, 200),
                            'message' => 'O Email deve ter entre 5 a 200 characters.'
                        )
		)
	);
    
    public $belongsTo = array(
            'Endereco' => array(
                    'className' => 'Endereco',
                    'foreignKey' => 'id_endereco',
                    'conditions' => '',
                    'fields' => '',
                    'order' => ''
            )
    );
    
}
