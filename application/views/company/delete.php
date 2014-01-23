<fieldset>
    <legend>
        Delete Company        
    </legend>
    <?php echo form_open("company/delete/{$company_id}"); ?>
    <h3 style="color:crimson;">
        Are you sure that you would like to delete Company #<?php echo $log_id; ?>?
    </h3>
    <?php 
        echo form_submit( 'delete_no', 'NO' );
        echo form_submit( 'delete_yes', 'YES' );
    ?>
    <?php echo form_close() ?>
</fieldset>