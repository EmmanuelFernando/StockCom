<?php
/* @var $this DispositivosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dispositivos',
);

$this->menu=array(
	array('label'=>'Nuevo Dispositivo', 'url'=>array('create')),
	array('label'=>'Administrar Dispositivos', 'url'=>array('admin')),
);
?>

<h1>Dispositivos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
