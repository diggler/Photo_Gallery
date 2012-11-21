<?php
require_once('../../includes/initialize.php');

if(!$session->is_logged_in()) { redirect_to("login.php");}
?>

<?php include_layout_template('admin_header.php');?>
<h2>Menu</h2>	
<nav>
    <a href="index.php">Admin Home</a>
    <a href="logfile.php">LogFile</a>
    <a href="logfile.php?clear=true">Clear Log</a>
</nav>

<section>

<?php
	if (isset($_GET['clear'])){
		if( $_GET['clear'] =='true'){
			log_action('Clear',"Cleared the log file.",'w');
			redirect_to('logfile.php');
		}
	}
	
	$file = LOG_PATH.DS.'log.txt';
	if(file_exists($file) && is_readable($file)) {
		
		if($handle = fopen($file, 'r')){
			$content = fread($handle, filesize($file)); //each character is one byte
		fclose($handle);
		}

		echo nl2br($content);
		echo "<hr />";
	}else{
		echo "Log file does not exist.";
	}

?>


</section>
            
<?php include_layout_template('admin_footer.php');?>