<?php
/* @var $this EstadosController */
/* @var $model Estados */

$this->breadcrumbs=array(
	'Estados'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Estados', 'url'=>array('index')),
	array('label'=>'Nuevo Estado', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#estados-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administracion de Estados</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Busqueda Advanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estados-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		#'id',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
