<div class="col-xs-12 row border_top_if_mobile">
    <div class="page-header">
        <h3 style="color:#AB4771">Clientes</h3>
    
    </div>
    <?= $this->Form->create(null,array('url'=>array('controller'=>'cliente','action'=>'novo_cliente'))); ?>
        <input id="categoriaEscolhida" value="" hidden="" />
            
        <div class="col-xs-12 row" style="background-color: #F5F5F5">
            
            <?php if(isset($errors)): 
                echo $this->element('fail_validation',$errors); 
            endif;?>
            
            <p class="lb_input_required">* Campos Obrigatórios</p> 
                <?= $this->Form->input('Cliente.id_cliente',array('type'=>'hidden')); ?>
                
                <?= $this->Form->input('Cliente.nome',array('type'=>'text','required','maxlength'=>'120','placeholder'=>'Nome *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
     
                <?= $this->Form->input('Cliente.cpf_cnpj',array('type'=>'text','required','maxlength'=>'20','placeholder'=>'CNPJ/CPF *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
                        
                <?= $this->Form->input('Cliente.telefone',array('type'=>'text','required','maxlength'=>'20','placeholder'=>'Telefone *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
                
                <?= $this->Form->input('Cliente.inscricao_estadual',array('type'=>'text','required','maxlength'=>'20','placeholder'=>'Inscrição Estadual *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
                
                <?= $this->Form->input('Endereco.cep',array('type'=>'number','required','maxlength'=>'20','placeholder'=>'CEP *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
               
                
                <?= $this->Form->input('Cliente.email',array('type'=>'text','required','maxlength'=>'255','placeholder'=>'email@email.com *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
                
                <?= $this->Form->input('Cidade.nome',array('type'=>'text','required','size'=>'20','placeholder'=>'Cidade *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
                
                <?= $this->Form->input('Bairro.nome',array('type'=>'text','required','size'=>'20','placeholder'=>'Bairro *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
                
                <?= $this->Form->input('Endereco.rua',array('type'=>'text','required','size'=>'20','placeholder'=>'Rua *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
                
                <?= $this->Form->input('Endereco.numero',array('type'=>'number','required','maxlength'=>'5','size'=>'10','placeholder'=>'Número *','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
                
                <?= $this->Form->input('Endereco.complemento',array('type'=>'text','placeholder'=>'Complemento','label'=>false,'div'=>false,'errorMessage'=>false)); ?>
                
                
                
                <?php if(isset($editando_cliente)):?>
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="icon-ok bigger-110"></i>
                        Editar
                    </button> 
                    <a class="btn btn-sm btn-danger btn-primary" href="<?=$HOST.'cliente'?>">
                        <i class="icon-remove bigger-110"></i>
                        Cancelar
                    </a>
                <?php else: ?>
                    <button class="btn btn-sm btn-primary" type="submit">
                        <i class="icon-ok bigger-110"></i>
                        Salvar
                    </button> 
                <?php endif; ?>
                
        </div>
    </form>
        

</div>
    
    <?= $this->Session->flash('clientWarning'); ?> 
    <div class="col-xs-12 row">
            
            <div class="table-header">
                    Tabela De Clientes
            </div>

            <div class="table-responsive">
                <table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
                            <thead>
                                    <tr role="row">
                                        
                                                <th>Status</th>
                                                <th class="sorting" >Nome</th>
                                                <th class="sorting" >CPF/CNPJ</th>
                                                <th class="hidden-480 sorting" >Telefone</th>
                                                <th class="sorting" >Inscrição Estadual</th>
                                                <th class="hidden-480 sorting" >CEP</th>
                                                <th class="sorting_disabled" >Ações</th>
                                    </tr>
                            </thead>


                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <?php foreach($clientes as $cliente) : ?>    
                        <tr class="odd">
                            <td class="center  sorting_1"> 
                                    <?=$this->element('label_status',array('ativo'=>$cliente['Cliente']['ativo'],'link_change_status'=>$HOST.'cliente/change_status/'.$cliente['Cliente']['id_cliente']));?>
                            </td>

                            <td class=" ">
                                    <?=$cliente['Cliente']['nome']?>
                            </td>
                            <td> <?=$cliente['Cliente']['cpf_cnpj']?></td>
                            <td> <?=$cliente['Cliente']['telefone']?></td>
                            <td> <?=$cliente['Cliente']['inscricao_estadual']?></td>
                            <td> <?=$cliente['Endereco']['cep']?></td>

                            <td class=" ">
                                    <div class="">
                                            <a  href="#modal-table-<?=$cliente['Cliente']['id_cliente']?>" role="button" data-toggle="modal">
                                                    <i class="icon-zoom-in bigger-130"></i>
                                            </a>
                                            
                                            <a class="green" href="<?=$HOST.'cliente/edit_cliente/'.$cliente['Cliente']['id_cliente']?>">
                                                    <i class="icon-pencil bigger-130"></i>
                                            </a>

                                            <a href="<?=$HOST.'cliente/delete_cliente/'.$cliente['Cliente']['id_cliente']?>" class="red" onclick="if (confirm('Tem certeza que deseja apagar as informações do cliente <?=$cliente['Cliente']['nome']?>?')) { document.post_546a46bbbf910487148132.submit(); } event.returnValue = false; return false;">
                                                
                                                    <i class="icon-trash bigger-130"></i>
                                            </a>
                                        
                                    </div>
                                
                            </td>
                        </tr>
                        
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
    </div>
 


<?php foreach($clientes as $cliente) : ?>    
    <div id="modal-table-<?=$cliente['Cliente']['id_cliente']?>" class="modal fade in" tabindex="-1" aria-hidden="false" >
            <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header no-padding">
                                    <div class="table-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    <span class="white">×</span>
                                            </button>
                                        <p> 
                                            <?=$this->element('label_status',
                                                                    array('ativo'=> $cliente['Cliente']['ativo'],
                                                                                    'link_change_status'=>$HOST.'cliente/change_status/'.$cliente['Cliente']['id_cliente']
                                                                          )
                                                             );?>
                                            
                                            <?=$cliente['Cliente']['nome']?> 
                                        </p>
                                    </div>
                            </div>

                            <div class="modal-body no-padding">
                                    <table class="table table_mentoris table-striped table-bordered table-hover no-margin-bottom no-border-top">
                                            <thead>
                                                    <tr>
                                                        <th>Nome :
                                                            <td><?=$cliente['Cliente']['nome']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>CPF/CNPJ :
                                                            <td><?=$cliente['Cliente']['cpf_cnpj']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Telefone :
                                                            <td><?=$cliente['Cliente']['telefone']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th >Inscrição Estadual :
                                                            <td><?=$cliente['Cliente']['inscricao_estadual']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Email :
                                                            <td><?=$cliente['Cliente']['email']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>CEP :
                                                            <td><?=$cliente['Endereco']['cep']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Cidade :
                                                            <td><?=$cliente['Endereco']['Bairro']['Cidade']['nome']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Bairro :
                                                            <td><?=$cliente['Endereco']['Bairro']['nome']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Rua :
                                                            <td><?=$cliente['Endereco']['rua']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Numero :
                                                            <td><?=$cliente['Endereco']['numero']?></td>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Complemento :
                                                            <td><?=$cliente['Endereco']['complemento']?></td>
                                                        </th>
                                                    </tr>
                                            </thead>

                                    </table>
                            </div>

                            <div class="modal-footer no-margin-top">
                                    <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                                            <i class="icon-backward"></i>
                                            Voltar
                                    </button>
                            </div>
                    </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
    </div>
<?php endforeach; ?>