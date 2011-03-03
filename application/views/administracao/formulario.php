<div id="categoria-form">
<?php
	echo validation_errors();
	echo form_open(base_url() . 'administracao/categorias/adicionar');
	
	echo form_fieldset();
	
	$img_novo_genero = array(
		'src'		=> 'externalfiles/img/novo_genero.png',
		'width'		=>	'167',
		'height'	=> '25',
	);
	
	echo img($img_novo_genero);
	
	echo form_input('genero', set_value('genero'));
	
	echo form_submit('mysubmit', 'Adicionar');
	
	echo form_fieldset_close();
	echo form_close();
?>
</div>