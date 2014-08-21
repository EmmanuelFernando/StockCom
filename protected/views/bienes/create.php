<?php
/* @var $this BienesController */
/* @var $model Bienes */

$this->breadcrumbs=array(
	'Bienes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listado de Bienes', 'url'=>array('index')),
	array('label'=>'Administración de Bienes', 'url'=>array('admin')),
);
?>

<h1>Nuevo Bien</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>