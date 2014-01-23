<fieldset>
    <legend>
        Delete Profile        
    </legend>
    <?php echo form_open("profile/delete/{$profile_id}"); ?>
    <h3 style="color:crimson;">
        Are you sure that you would like to delete Profile #<?php echo $profile_id; ?>?
    </h3>
    <?php 
        echo form_submit( 'delete_no', 'NO' );
        echo form_submit( 'delete_yes', 'YES' );
    ?>
    <?php echo form_close() ?>
</fieldset>