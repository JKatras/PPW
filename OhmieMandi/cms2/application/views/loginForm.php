<div class="row">
	
	<div class="small-12 medium-6 columns">
	<h1>Please Log In</h1>
		<?php
		echo validation_errors();
		
		echo form_open('users/submit');
		
		echo 'Username ';
		echo form_input('username', '');
		?>
	</div>
</div>
<div class="row">
	<div class="small-12 medium-6 columns">
		<?php
		echo 'Password';
		echo form_password('pword', '');
		
		
		echo form_submit('submit', 'Submit');
		echo form_close();
		?>
	</div>
</div>
	