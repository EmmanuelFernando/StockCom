<?php
/* @var $this TipoAsignacionesController */
/* @var $model TipoAsignaciones */

$this->breadcrumbs=array(
	'Tipo Asignaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoAsignaciones', 'url'=>array('index')),
	array('label'=>'Create TipoAsignaciones', 'url'=>array('create')),
	array('label'=>'View TipoAsignaciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoAsignaciones', 'url'=>array('admin')),
);
?>

<h1>Update TipoAsignaciones <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>