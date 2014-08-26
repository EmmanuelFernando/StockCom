<?php
/* @var $this EstadosController */
/* @var $model Estados */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	$model->descripcion=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Nuevo Estados', 'url'=>array('create')),
	array('label'=>'Ver el Estado', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Estados', 'url'=>array('admin')),
);
?>

<h1>Actualizar el estado <?php echo $model->descripcion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>