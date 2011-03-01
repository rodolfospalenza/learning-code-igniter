<?php echo doctype('html4-trans'); ?>
<html>
	<head>
		<title>CodeIgniter</title>
		<?php	
			$meta = array(
			        array('name' => 'robots', 'content' => 'no-cache'),
			        array('name' => 'description', 'content' => 'My Great Site'),
			        array('name' => 'keywords', 'content' => 'love, passion, intrigue, deception'),
			        array('name' => 'robots', 'content' => 'no-cache'),
			      	array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
			);
			echo meta($meta);
			
			$link = array(
				'href' 	=> 'externalfiles/css/style.css',
				'rel' 	=> 'stylesheet',
				'type'	=> 'text/css'
			);
			echo link_tag($link);
			?>			
	</head>

	<body>
		<?php 
			echo "<div id='header'>";
				echo heading('CodeIgniter', 1);
			echo "</div>";
		?>