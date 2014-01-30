<div class="row">
	<div class="small-12 columns">
		<h3>Your file was successfully uploaded!</h3>
		<p>File Name: <?php echo($upload_data['file_name']) ?></p>
		<img src="<?php echo base_url();?>public/images/<?php echo $upload_data['file_name'] ?>" alt="" />
		<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
	</div>
</div>