<?php
/* @var $this DispositivosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dispositivoses',
);

$this->menu=array(
	array('label'=>'Create Dispositivos', 'url'=>array('create')),
	array('label'=>'Manage Dispositivos', 'url'=>array('admin')),
);
?>

<h1>Dispositivoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
