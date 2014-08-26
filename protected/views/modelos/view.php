<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modelos'=>array('index'),
	$model->descripcion,
);

$this->menu=array(
	array('label'=>'Listar Modelos', 'url'=>array('index')),
	array('label'=>'Nuevo Modelo', 'url'=>array('create')),
	array('label'=>'Actualizar el Modelo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar el Modelo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Modelos', 'url'=>array('admin')),
);
?>

<h1>Ver el modelo #<?php echo $model->descripcion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id',
		'marcas.descripcion',
		'descripcion',
	),
)); ?>
