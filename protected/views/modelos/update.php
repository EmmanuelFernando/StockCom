<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modelos'=>array('index'),
	$model->descripcion=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Modelos', 'url'=>array('index')),
	array('label'=>'Nuevo Modelo', 'url'=>array('create')),
	array('label'=>'Ver el Modelo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Modelos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Modelos <?php echo $model->descripcion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>