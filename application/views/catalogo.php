<?php echo doctype('html4-trans'); ?>
<html>
	<head>
		<title>Catálogo de Filmes</title>
		<?php 		
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
			echo heading('Catalogo de Filmes', 1);
			foreach ($filmes as $filme):
				echo $filme->fil_nome;
				echo nbs(5);
				echo $filme->fil_ano;
				echo br(2);
			endforeach;	
		?>	
	</body>
</html>  