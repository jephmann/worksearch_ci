<fieldset>
    <legend>
        <a title="Update This Contact" href="<?php echo base_url('contact/update/'.$contact_id); ?>">Update</a>
        <a title="Delete This Contact" href="<?php echo base_url('contact/delete/'.$contact_id); ?>" class="delete">Delete</a>
        Contact
    </legend>
    <table>
        <colgroup>
            <col style="background-color: #CCCCCC; font-weight: bolder;" />
            <col style="background-color: #FFFFFF;" />
        </colgroup>
        <tr>
            <td>Contact:</td>
            <td><?php echo $contact_name; ?></td>
        </tr>
        <tr>
            <td>Title:</td>
            <td><?php echo $contact_title; ?></td>
        </tr>
        <tr>
            <td>Department:</td>
            <td><?php echo $contact_department; ?></td>
        </tr>
        <tr>
            <td>Remarks/Notes:</td>
            <td><?php echo $contact_remarks; ?></td>
        </tr>
        <tr>
            <td>Office E-Mail:</td>
            <td><?php echo $contact_email; ?></td>
        </tr>
        <tr>
            <td>Office Phone:</td>
            <td><?php echo $contact_phone; ?></td>
        </tr>
        <tr>
            <td>Mobile Phone:</td>
            <td><?php echo $contact_mobile; ?></td>
        </tr>
        <tr>
            <td>Office Fax:</td>
            <td><?php echo $contact_fax; ?></td>
        </tr>
        <tr>
            <td>LinkedIn:</td>
            <td><?php echo $contact_linkedin; ?></td>
        </tr>
        <tr>
            <td>Facebook:</td>
            <td><?php echo $contact_facebook; ?></td>
        </tr>
        <tr>
            <td>Twitter:</td>
            <td><?php echo $contact_twitter; ?></td>
        </tr>
        <tr>
            <td>GooglePlus:</td>
            <td><?php echo $contact_googleplus; ?></td>
        </tr>
    </table>
</fieldset>
