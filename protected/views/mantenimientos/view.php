<?php
/* @var $this MantenimientosController */
/* @var $model Mantenimientos */

$this->breadcrumbs=array(
	'Mantenimientoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Mantenimientos', 'url'=>array('index')),
	array('label'=>'Create Mantenimientos', 'url'=>array('create')),
	array('label'=>'Update Mantenimientos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mantenimientos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mantenimientos', 'url'=>array('admin')),
);
?>

<h1>View Mantenimientos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bien_id',
		'fecha',
		'descripcion',
		'capacidad',
	),
)); ?>
