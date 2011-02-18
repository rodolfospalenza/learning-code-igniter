<?php echo doctype('html4-trans'); ?>
<html>
	<head>
		<title>Hello World</title>
		<?php 
			$link = array(
				'href'	=> 'externalfiles/css/style.css',
				'rel' 	=> 'stylesheet',
				'type' 	=> 'text/css',
				'media' => 'screen'
			);
			echo link_tag($link);
		
			$meta = array(
			        array('name' => 'robots', 'content' => 'no-cache'),
			        array('name' => 'description', 'content' => 'My Great Site'),
			        array('name' => 'keywords', 'content' => 'love, passion, intrigue, deception'),
			        array('name' => 'robots', 'content' => 'no-cache'),
			        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
			);
			echo meta($meta);
			?>
	</head>

	<body>
		<?php
			echo heading("It's Works!", 1); 
			
			$image_properties = array(
          		'src' 		=> 'externalfiles/img/codeigniter.png',
          		'alt' 		=> 'Logo CodeIgniter',
          		'class' 	=> 'post_images',
          		'width' 	=> '119',
          		'height'	=> '138',
          		'title' 	=> 'CodeIgniter',
          		'rel' 		=> 'lightbox',
			);
			echo img($image_properties);
			
			$lista = array(
				'domingo',
				'segunda',
				'terça',
				'quarta',
				'quinta',
				'sexta',
				'sábado'
			);
			$lista_properties = array(
				'class'	=> 'lista',
				'id'	=> 'diassemana'
			);
			echo ul($lista, $lista_properties);
		?>	
	</body>
</html>  