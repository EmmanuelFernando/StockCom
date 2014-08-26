<?php
/* @var $this DispositivosController */
/* @var $model Dispositivos */

$this->breadcrumbs=array(
	'Dispositivos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Dispositivos', 'url'=>array('index')),
	array('label'=>'Administrar Dispositivos', 'url'=>array('admin')),
);
?>

<h1>Nuevo Dispositivo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>