<?php
/* @var $this DispositivosController */
/* @var $model Dispositivos */

$this->breadcrumbs=array(
	'Dispositivoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dispositivos', 'url'=>array('index')),
	array('label'=>'Manage Dispositivos', 'url'=>array('admin')),
);
?>

<h1>Create Dispositivos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>