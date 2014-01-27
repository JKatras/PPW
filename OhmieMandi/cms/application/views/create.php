<div class="row">
<div class="small-12 columns">
	<h3>Create/Edit Game</h3>
</div>
</div>
<?php

echo validation_errors("<p style='color: red;'>", "</p>");

echo form_open('dashboard/submit/'.$gameId);
?>
<div class="row">
	<div class="small-12 columns large-6 columns">
	    <label>Game Name</label> 
	    	<?php  
           	$data = array(
              'name'        => 'name',
              'id'          => 'name',
              'value'       =>  $name,
              'maxlength'   => '240',
            ); 
            echo form_input($data); 
	        ?>
	</div>
	<!--<div class="small-12 columns large-6 columns"> 
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
    </div>-->
</div>
<div class="row">
	<div class="small-12 columns">
       <label>Keywords</label>
       		<?php  
           	$data = array(
              'name'        => 'keywords',
              'id'          => 'keywords',
              'value'       =>  $keywords,
              'maxlength'   => '500',
            );
			echo form_input($data); 
        	?>  
    </div>
</div>
<div class="row">
	<div class="small-12 columns">
    	<label>Tagline</label> 
        	<?php  
           	$data = array(
              'name'        => 'slug',
              'id'          => 'slug',
              'value'       =>  $slug,
              'maxlength'   => '700',
            );
       	 	echo form_input($data); 
        	?>
	</div>
</div>
<div class="row">
	<div class="small-12 columns"> 
        <label>Description</label>
       		<?php  
           	$data = array(
              'name'        => 'description',
              'id'          => 'description',
              'value'       =>  $description,
              'rows'   		=> '20',
              'cols'        => '50',
            );
        	echo form_textarea($data); 
        	?>
	</div>
</div>
<div class="row">
	<div class="small-12 columns"> 
        <label>Requirements</label>
       		<?php  
           	$data = array(
              'name'        => 'requirements',
              'id'          => 'requirements',
              'value'       =>  $requirements,
              'maxlength'  	=> '500',
            );
        	echo form_input($data); 
        	?>
	</div>
</div>
<div class="row">
	<div class="small-12 columns"> 
        <label>Compatibility</label>
       		<?php  
           	$data = array(
              'name'        => 'compatibility',
              'id'          => 'compatibility',
              'value'       =>  $compatibility,
              'maxlength'  	=> '500',
            );
        	echo form_input($data); 
        	?>
	</div>
</div>
<div class="row">
	<div class="small-12 columns"> 
        <label>Price</label>
       		<?php  
           	$data = array(
              'name'        => 'price',
              'id'          => 'price',
              'value'       =>  $price,
              'maxlength'  	=> '10',
            );
        	echo form_input($data); 
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