<div class="row">
<div class="small-12 columns">
	<h3>Create New Page</h3>
</div>
</div>
<?php

echo validation_errors("<p style='color: red;'>", "</p>");

echo form_open('webpages/submit/'.$update_id);
?>
<div class="row">
	<div class="small-12 columns large-6 columns">
	    <label>Page Headline</label> 
	    	<?php  
           	$data = array(
              'name'        => 'page_headline',
              'id'          => 'page_headline',
              'value'       =>  $page_headline,
              'maxlength'   => '240',
            ); 
            echo form_input($data); 
	        ?>
	</div>
	<div class="small-12 columns large-6 columns"> 
    	<label>Page Title</label> 
        	<?php  
            $data = array(
              'name'        => 'page_title',
              'id'          => 'page_title',
              'value'       =>  $page_title,
              'maxlength'   => '230',
            );
			echo form_input($data); 
        	?>
    </div>
</div>
<div class="row">
	<div class="small-12 columns">
       <label>Keywords</label>
       		<?php  
           	$data = array(
              'name'        => 'keywords',
              'id'          => 'keywords',
              'value'       =>  $keywords,
              'maxlength'   => '230',
            );
			echo form_input($data); 
        	?>  
    </div>
</div>
<div class="row">
	<div class="small-12 columns">
    	<label>Page Description</label> 
        	<?php  
           	$data = array(
              'name'        => 'description',
              'id'          => 'description',
              'value'       =>  $description,
              'maxlength'   => '230',
            );
       	 	echo form_input($data); 
        	?>
	</div>
</div>
<div class="row">
	<div class="small-12 columns"> 
        <label>Page Content</label>
       		<?php  
           	$data = array(
              'name'        => 'page_content',
              'id'          => 'page_content',
              'value'       =>  $page_content,
              'rows'   		=> '30',
              'cols'        => '50',
            );
        	echo form_textarea($data); 
        	?>
	</div>
</div>
<div class="row">
	<div class="small-12 columns">
			<?php 
			echo form_submit ('submit', 'Submit'); 
			?>
	</div>
</div>
<?php
echo form_close();
?>