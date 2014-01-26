<h3>Content Management System</h3>

<?php
echo anchor('webpages/create', '<p>Create New Page</p>');
?>


<table>
    <tr>
    	<th width="450">Page Headline</th>
    	<th width="150"></th>
    	<!--<th>Edit</th>
    	<th>Delete</th>-->
    </tr>
    <?php
    foreach($query->result() as $row) {
        $edit_url = base_url()."webpages/create/".$row->id;
//      $delete_url = base_url()."webpages/deleteconf/".$row->id;
        $page_headline = $row->page_headline;
    ?>
    <tr>
    	<td><?php echo $page_headline; ?></td>
    	<td><?php echo anchor($edit_url, 'Edit');?></td>
    </tr>
    <?php 
    } ?>
</table>
<!--<?php
    
    
    
    $page_url = $row->page_url;
    if (($page_url=="homepage") || ($page_url=="contactus") || ($page_url=="thankyou")) {
        //this is a special page - don't let them delete it!
        echo "-";
    } else {
        echo anchor($delete_url, 'Delete');
    }
    
    ?></td>-->
   
   
