<div class="row">
	<div class="small-12 columns large-6 columns">
		<h3>Create/Edit Game</h3>
		<?php 
		echo '<p>'.anchor('upload', 'Upload Images').'</p>';
		echo validation_errors("<p class='error'>", "</p>");?>
	</div>
</div>
<div class="row">
	<div id="createForm" class="small-12 columns large-6 columns">
	<?php echo form_open('dashboard/submit/'.$gameId);?>
	    <label><p class="key">1</p>Game Name</label> 
	    	<?php  
           	$data = array(
              'name'        => 'name',
              'id'          => 'name',
              'value'       =>  $name,
              'maxlength'   => '240',
            ); 
            echo form_input($data); 
	        ?>
    	<label><p class="key">2</p>Tagline</label> 
        	<?php  
           	$data = array(
              'name'        => 'slug',
              'id'          => 'slug',
              'value'       =>  $slug,
              'maxlength'   => '700',
            );
       	 	echo form_input($data); 
        	?>
        <label><p class="key">3</p>Description</label>
       		<?php  
           	$data = array(
              'name'        => 'description',
              'id'          => 'description',
              'value'       =>  $description,
              'rows'   		=> '20',
            );
        	echo form_textarea($data); 
        	?>
        <label><p class="key">4</p>Requirements</label>
       		<?php  
           	$data = array(
              'name'        => 'requirements',
              'id'          => 'requirements',
              'value'       =>  $requirements,
              'maxlength'  	=> '500',
            );
        	echo form_input($data); 
        	?>
        <label><p class="key">5</p>Compatibility</label>
       		<?php  
           	$data = array(
              'name'        => 'compatibility',
              'id'          => 'compatibility',
              'value'       =>  $compatibility,
              'maxlength'  	=> '500',
            );
        	echo form_input($data); 
        	?>
        <label><p class="key">6</p>Price</label>
       		<?php  
           	$data = array(
              'name'        => 'price',
              'id'          => 'price',
              'value'       =>  $price,
              'maxlength'  	=> '10',
            );
        	echo form_input($data); 
        	?>

			<?php 
			echo form_submit ('submit', 'Submit', 'class="button"'); 
			?>
<?php
echo form_close();
?>
</div>

<div id="cmsKey" class="small-12 columns large-6 columns" id="cmsKey">
	<img src="<?php echo base_url(); ?>public/images/cmsKey.png" alt="" />
</div>
</div>

