<?php
/* @var $this DispositivosController */
/* @var $model Dispositivos */

$this->breadcrumbs=array(
	'Dispositivoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dispositivos', 'url'=>array('index')),
	array('label'=>'Create Dispositivos', 'url'=>array('create')),
	array('label'=>'View Dispositivos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dispositivos', 'url'=>array('admin')),
);
?>

<h1>Update Dispositivos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>