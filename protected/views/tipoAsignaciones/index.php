<?php
/* @var $this TipoAsignacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Asignaciones',
);

$this->menu=array(
	array('label'=>'Create TipoAsignaciones', 'url'=>array('create')),
	array('label'=>'Manage TipoAsignaciones', 'url'=>array('admin')),
);
?>

<h1>Tipo Asignaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
