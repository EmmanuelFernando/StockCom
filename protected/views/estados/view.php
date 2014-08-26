<?php
/* @var $this EstadosController */
/* @var $model Estados */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	$model->descripcion,
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Nuevo Estado', 'url'=>array('create')),
	array('label'=>'Actualizar Estado', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Estados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Ver el estado #<?php echo $model->descripcion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id',
		'descripcion',
	),
)); ?>
