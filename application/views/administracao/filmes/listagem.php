<div id="filme-listagem">
	<?php
		$img_filmes = array(
			'src'		=> 'externalfiles/img/novo_genero.png',
			'width'		=>	'167',
			'height'	=> '25',
		);
		
		echo img($img_filmes);
		
	
		foreach ($filmes as $filme):
			echo $filme->fil_nome . '<br>';
		endforeach;
	?>
</div>