<h3>Content Management System</h3>

<?php
echo '<p>'.anchor('dashboard/create', 'Add New Product').'</p>';
?>

<table>
    <tr>
    	<th width="600"><h4>Listed Games</h4></th>
    	<th width="150"></th>
    	<th width="150"></th>
    	<!--<th>Edit</th>
    	<th>Delete</th>-->
    </tr>
    <?php
    foreach($gameId as $g => $row) {
        $edit_url = base_url()."dashboard/create/${row['gameId']}";
        $img_url = base_url()."dashboard/editImgs/${row['gameId']}";
//      $delete_url = base_url()."webpages/deleteconf/".$row->id;
        $name = "${row['name']}";
    ?>
    <tr>
    	<td><?php echo $name; ?></td>
    	<td><?php echo anchor($edit_url, 'Edit');?></td>
    	<td><?php echo anchor($img_url, 'Add Images');?></td>
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
   
   
