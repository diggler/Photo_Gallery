<?php
require_once('../../includes/initialize.php');

if(!$session->is_logged_in()) { redirect_to("login.php");}
?>

<?php include_layout_template('admin_header.php');?>
        	
<?php

	$user = new User();
	$user->username 	= "dandiggler";
	$user->password 	= "1234";
	$user->first_name 	= "Dan";
	$user->last_name 	= "Diggler";
	$user->create();

?>
            
<?php include_layout_template('admin_footer.php');?>
