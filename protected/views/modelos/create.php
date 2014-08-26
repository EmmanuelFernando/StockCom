<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modelos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Modelos', 'url'=>array('index')),
	array('label'=>'Administrar Modelos', 'url'=>array('admin')),
);
?>

<h1>Nuevo modelo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>