<?php
/* @var $this DispositivosController */
/* @var $model Dispositivos */

$this->breadcrumbs=array(
	'Dispositivoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dispositivos', 'url'=>array('index')),
	array('label'=>'Create Dispositivos', 'url'=>array('create')),
	array('label'=>'Update Dispositivos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dispositivos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dispositivos', 'url'=>array('admin')),
);
?>

<h1>View Dispositivos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'categoria_id',
		'estado_id',
	),
)); ?>
