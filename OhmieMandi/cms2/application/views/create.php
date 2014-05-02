<div class="row">
<div class="small-12 columns">
	<h3>Create/Edit Game</h3>
	<!--<p><a href="http://">Link Text</a></p>-->
	<?php 
	echo '<p>'.anchor('upload', 'Upload Images').'</p>';
	echo validation_errors("<p class='error'>", "</p>");?>
</div>
</div>
	<?php echo form_open('dashboard/submit/'.$gameId);?>	
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
</div>
<div class="row">
	<div class="small-12 columns large-6 columns">
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
	<div class="small-12 columns large-6 columns">
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
	<div class="small-12 columns large-6 columns"> 
        <label>Description</label>
       		<?php  
           	$data = array(
              'name'        => 'description',
              'id'          => 'description',
              'value'       =>  $description,
              'rows'   		=> '20',
            );
        	echo form_textarea($data); 
        	?>
	</div>
</div>
<div class="row">
	<div class="small-12 columns large-6 columns"> 
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
	<div class="small-12 columns large-6 columns"> 
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
	<div class="small-12 columns large-6 columns"> 
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
	<div class="small-12 columns large-6 columns">
			<?php 
			echo form_submit ('submit', 'Submit', 'class="button"'); 
			?>
	</div>
</div>
<?php
echo form_close();
?>