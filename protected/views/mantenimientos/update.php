<?php
/* @var $this MantenimientosController */
/* @var $model Mantenimientos */

$this->breadcrumbs=array(
	'Mantenimientoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mantenimientos', 'url'=>array('index')),
	array('label'=>'Create Mantenimientos', 'url'=>array('create')),
	array('label'=>'View Mantenimientos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mantenimientos', 'url'=>array('admin')),
);
?>

<h1>Update Mantenimientos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>