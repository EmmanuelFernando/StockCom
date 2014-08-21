<?php
/* @var $this BienesController */
/* @var $model Bienes */

$this->breadcrumbs=array(
	'Bienes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listado de Bienes', 'url'=>array('index')),
	array('label'=>'Crear Bienes', 'url'=>array('create')),
	array('label'=>'Actualizar Bienes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Bienes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Bienes', 'url'=>array('admin')),
);
?>

<h1>Vista del Bien # <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
                'codigo',
                'fecha',
		'categoria.modelo',
		'estado.descripcion',
	),
)); ?>
