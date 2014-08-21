<?php
/* @var $this MantenimientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mantenimientoses',
);

$this->menu=array(
	array('label'=>'Create Mantenimientos', 'url'=>array('create')),
	array('label'=>'Manage Mantenimientos', 'url'=>array('admin')),
);
?>

<h1>Mantenimientoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
