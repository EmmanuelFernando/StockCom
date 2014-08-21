<h1>Seguinos en <?php echo $twitter;?></h1>
<?php foreach($model as $data):?>
	<h1><?php echo $data->nombre;?></h1>
<?php endforeach;?>