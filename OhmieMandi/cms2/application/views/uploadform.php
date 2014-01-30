<div class="row">
	<div class="small-12 columns">
		<h3>Upload an Image</h3>
		<?php echo $error;?>
		
		<?php echo form_open_multipart('upload/do_upload');?>
		
		<input type="file" name="userfile" size="30" />
		
		<br /><br />
		<input class="button"type="submit" value="Upload" />
		</form>
		<p><a href="dashboard/manage">Back to Content Management</a></p>
	</div>
</div>