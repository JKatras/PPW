<h1>Please Log In</h1>
<?php
echo validation_errors();

echo form_open('users/submit');

echo 'Username ';
echo form_input('username', '');
echo '<br />';

echo 'Password';
echo form_password('pword', '');
echo '<br />';

echo form_submit('submit', 'Submit');
echo form_close();
?>