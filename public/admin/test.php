<?php
require_once('../../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("login.php"); }
?>

<?php include_layout_template('admin_header.php'); ?>

<?php
	$user = new User();
	$user->username = "johnsmith";
	$user->password = "abcd12345";
	$user->first_name = "John";
	$user->last_name = "Smith";
	$user->create();
?>


<?php include_layout_template('admin_footer.php'); ?>
		
