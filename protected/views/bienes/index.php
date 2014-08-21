<?php
/* @var $this BienesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bienes',
);

$this->menu=array(
	array('label'=>'Crear Bienes', 'url'=>array('create')),
	array('label'=>'Administración de Bienes', 'url'=>array('admin')),
);
?>

<h1>Bienes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
