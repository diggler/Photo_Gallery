<?php
require_once('../../includes/initialize.php');

if(!$session->is_logged_in()) { redirect_to("login.php");}
?>

<?php include_layout_template('admin_header.php');?>
        	<h2>Menu</h2>
            <nav>
            	<a href="">Admin Home</a>
                <a href="logfile.php">LogFile</a>
            </nav>	
            
<?php include_layout_template('admin_footer.php');?>
