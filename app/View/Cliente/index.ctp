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
            
            <p>* Campos Obrigatórios</p> 
                <?= $this->Form->input('Cliente.id_cliente',array('type'=>'hidden')); ?>
                
                <label class="lb_input_required">*</label>
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
                
                
                <button class="btn btn-sm btn-primary" type="submit">
                    <i class="icon-ok bigger-110"></i>
                    Salvar
                </button> 
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
                                    <span class="label label-sm label-success">Ativo</span>
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
                                            <a class="blue" href="#">
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
 

