<?php
/* @var $this EstadosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estados',
);

$this->menu=array(
	array('label'=>'Nuevo Estado', 'url'=>array('create')),
	array('label'=>'Administracion de Estados', 'url'=>array('admin')),
);
?>

<h1>Estados</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
