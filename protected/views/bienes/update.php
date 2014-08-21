<?php
/* @var $this BienesController */
/* @var $model Bienes */

$this->breadcrumbs=array(
	'Bienes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listado de Bienes', 'url'=>array('index')),
	array('label'=>'Crear Bienes', 'url'=>array('create')),
	array('label'=>'Visualizar Bienes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Bienes', 'url'=>array('admin')),
);
?>

<h1>Actualización de Bienes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>