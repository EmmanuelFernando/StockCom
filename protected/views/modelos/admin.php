<?php
/* @var $this ModelosController */
/* @var $model Modelos */

$this->breadcrumbs=array(
	'Modelos'=>array('index'),
	'Administracion',
);

$this->menu=array(
	array('label'=>'Listar Modelos', 'url'=>array('index')),
	array('label'=>'Nuevo Modelo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#modelos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administracion Modelos</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Advanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'modelos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id',
		'marcas.descripcion',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
