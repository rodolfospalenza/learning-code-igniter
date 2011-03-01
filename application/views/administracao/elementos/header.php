<?php echo doctype('html4-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $titulo ?></title>
		<?php
			echo link_tag('externalfiles/css/administracao.css');
		
			$meta = array(
			        array('name' => 'robots', 'content' => 'NOFOLLOW, NOINDEX'),
			        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
			);
			echo meta($meta);
			?>
			
			<script type="text/javascript" 
					src="<?php echo base_url(); ?>externalfiles/js/jquery-1.5.1.min.js">
					</script>
			<script type="text/javascript"
					src="<?php echo base_url(); ?>externalfiles/js/menu.js">
					</script>		
	</head>

	<body>