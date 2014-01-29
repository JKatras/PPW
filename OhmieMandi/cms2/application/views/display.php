<?php
//echo('<h1>User Table</h1>');  
	foreach ($query->result() as $row) {
		echo '<h2>'.$row->username.'</h2>';
	}

?>