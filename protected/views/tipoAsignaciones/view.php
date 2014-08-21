<?php
/* @var $this TipoAsignacionesController */
/* @var $model TipoAsignaciones */

$this->breadcrumbs=array(
	'Tipo Asignaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoAsignaciones', 'url'=>array('index')),
	array('label'=>'Create TipoAsignaciones', 'url'=>array('create')),
	array('label'=>'Update TipoAsignaciones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoAsignaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoAsignaciones', 'url'=>array('admin')),
);
?>

<h1>View TipoAsignaciones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descripcion',
	),
)); ?>
