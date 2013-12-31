<fieldset>
    <legend>
        <a title="Update This Log" href="<?php echo base_url('log/update/'.$log_id); ?>">Update</a>
        <a title="Delete This Log" href="<?php echo base_url('log/delete/'.$log_id); ?>" class="delete">Delete</a>
        Log
    </legend>
    <table>
    <colgroup>
        <col style="background-color: #CCCCCC; font-weight: bolder;" />
        <col style="background-color: #FFFFFF;" />
    </colgroup>
    <tr>
        <td>Week Ending:</td>
        <td><?php echo $log_week_ending; ?></td>
    </tr>
    <tr>
        <td>Contact Date:</td>
        <td><?php echo $log_contact_date; ?></td>
    </tr>
    <tr>
        <td>Company:</td>
        <td><?php echo $log_company; ?></td>
    </tr>
    <tr>
        <td>Contact:</td>
        <td><?php echo $log_contact; ?></td>
    </tr>
    <tr>
        <td>Type of Work Sought:</td>
        <td><?php echo $log_work; ?></td>
    </tr>
    <tr>
        <td>Contact Method:</td>
        <td><?php echo $log_contact_method; ?></td>
    </tr>
    <tr>
        <td>Specify:</td>
        <td><?php echo $log_specify; ?></td>
    </tr>
    <tr>
        <td>Results:</td>
        <td><?php echo $log_results; ?></td>
    </tr>
    <tr>
        <td>Remarks:</td>
        <td><?php echo $log_remarks; ?></td>
    </tr>
</table>
</fieldset>