<?php
/* @var $this DestinosController */
/* @var $model Destinos */

$this->breadcrumbs=array(
	'Destinoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Destinos', 'url'=>array('index')),
	array('label'=>'Manage Destinos', 'url'=>array('admin')),
);
?>

<h1>Create Destinos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>