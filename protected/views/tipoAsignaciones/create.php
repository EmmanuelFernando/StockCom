<?php
/* @var $this TipoAsignacionesController */
/* @var $model TipoAsignaciones */

$this->breadcrumbs=array(
	'Tipo Asignaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoAsignaciones', 'url'=>array('index')),
	array('label'=>'Manage TipoAsignaciones', 'url'=>array('admin')),
);
?>

<h1>Create TipoAsignaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>