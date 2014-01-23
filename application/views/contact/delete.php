<fieldset>
    <legend>
        Delete Contact        
    </legend>
    <?php echo form_open("contact/delete/{$contact_id}"); ?>
    <h3 style="color:crimson;">
        Are you sure that you would like to delete Contact #<?php echo $contact_id; ?>?
    </h3>
    <?php 
        echo form_submit( 'delete_no', 'NO' );
        echo form_submit( 'delete_yes', 'YES' );
    ?>
    <?php echo form_close() ?>
</fieldset>