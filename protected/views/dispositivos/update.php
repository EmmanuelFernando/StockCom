<?php
/* @var $this DispositivosController */
/* @var $model Dispositivos */

$this->breadcrumbs=array(
	'Dispositivos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Dispositivos', 'url'=>array('index')),
	array('label'=>'Nuevo Dispositivo', 'url'=>array('create')),
	array('label'=>'Ver Dispositivos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Dispositivos', 'url'=>array('admin')),
);
?>

<h1>Actualizar el Dispositivo <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>