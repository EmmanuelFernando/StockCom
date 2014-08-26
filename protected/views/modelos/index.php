<?php
/* @var $this ModelosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Modelos',
);

$this->menu=array(
	array('label'=>'Nuevo Modelo', 'url'=>array('create')),
	array('label'=>'Administrar Modelos', 'url'=>array('admin')),
);
?>

<h1>Modelos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
