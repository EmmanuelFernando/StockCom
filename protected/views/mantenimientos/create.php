<?php
/* @var $this MantenimientosController */
/* @var $model Mantenimientos */

$this->breadcrumbs=array(
	'Mantenimientoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mantenimientos', 'url'=>array('index')),
	array('label'=>'Manage Mantenimientos', 'url'=>array('admin')),
);
?>

<h1>Create Mantenimientos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>