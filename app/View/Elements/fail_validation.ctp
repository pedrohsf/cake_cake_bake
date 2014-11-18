
<?php if(isset($errors)): ?>
    <?php foreach($errors as $errorKey => $error): ?>
        <div class="alert alert-block alert-danger col-xs-12" id="flash_sucess_custom">
                        <button type="button" class="close" data-dismiss="alert">
                                <i class="icon-remove"></i>
                        </button>
                            <?php echo h($error[0]); ?>
        </div>
    <?php endforeach; ?>
<?php endif;?>