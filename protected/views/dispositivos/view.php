<?php
/* @var $this DispositivosController */
/* @var $model Dispositivos */

$this->breadcrumbs=array(
	'Dispositivos'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'Listar Dispositivos', 'url'=>array('index')),
	array('label'=>'Nuevo Dispositivo', 'url'=>array('create')),
	array('label'=>'Actualizar Dispositivos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Dispositivos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Dispositivos', 'url'=>array('admin')),
);
?>

<h1>Ver el dispositivo #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		#'id',
		'codigo',
		'fecha',
		'tipos.descripcion',
		'marcas.descripcion',
		'modelos.descripcion',
		'estado.descripcion',
	),
)); ?>
