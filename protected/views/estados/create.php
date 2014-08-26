<?php
/* @var $this EstadosController */
/* @var $model Estados */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Nuevo Estado</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>