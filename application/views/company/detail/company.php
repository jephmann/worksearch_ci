<fieldset>
    <legend>
        <a title="Update This Company" href="<?php echo base_url('company/update/'.$company_id); ?>">Update</a>
        <a title="Delete This Company" href="<?php echo base_url('company/delete/'.$company_id); ?>" class="delete">Delete</a>
        Company
    </legend>
    <table>
        <colgroup>
            <col style="background-color: #CCCCCC; font-weight: bolder;" />
            <col style="background-color: #FFFFFF;" />
        </colgroup>
        <tr>
            <td>Company:</td>
            <td><?php echo $company_name; ?></td>
        </tr>
        <tr>
            <td>Recruiter?</td>
            <td><?php echo $company_recruiter; ?></td>
        </tr>
        <tr>
            <td>Industry:</td>
            <td><?php echo $company_industry; ?></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><?php echo $company_description; ?></td>
        </tr>
        <tr>
            <td>Remarks/Notes:</td>
            <td><?php echo $company_remarks; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $company_address; ?></td>
        </tr>
        <tr>
            <td>E-Mail:</td>
            <td><?php echo $company_email; ?></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><?php echo $company_phone; ?></td>
        </tr>
        <tr>
            <td>Fax:</td>
            <td><?php echo $company_fax; ?></td>
        </tr>
        <tr>
            <td>Website:</td>
            <td><?php echo $company_website; ?></td>
        </tr>
        <tr>
            <td>LinkedIn:</td>
            <td><?php echo $company_linkedin; ?></td>
        </tr>
        <tr>
            <td>Facebook:</td>
            <td><?php echo $company_facebook; ?></td>
        </tr>
        <tr>
            <td>Twitter:</td>
            <td><?php echo $company_twitter; ?></td>
        </tr>
        <tr>
            <td>GooglePlus:</td>
            <td><?php echo $company_googleplus; ?></td>
        </tr>
    </table>
</fieldset>