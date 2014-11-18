<?php if($ativo): ?>
    <a href="<?=$link_change_status?>">
        <span class="label label-sm label-success">Ativado</span>
    </a>
<?php else: ?>
   <a href="<?=$link_change_status?>"> 
       <span class="label label-sm label-danger">Desativado</span>
    </a>
<?php endif; ?>
 