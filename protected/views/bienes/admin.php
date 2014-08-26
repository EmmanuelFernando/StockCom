<?php
/* @var $this BienesController */
/* @var $model Bienes */

$this->breadcrumbs=array(
	'Bienes'=>array('index'),
	'Administración',
);

$this->menu=array(
	array('label'=>'Listado de Bienes', 'url'=>array('index')),
	array('label'=>'Crear Bienes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bienes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administración de Bienes</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'bienes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model->id,
	'columns'=>array(
		'id',
                'fecha',
		'categoria.marca',
                'categoria.modelo',
                'estado.descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
