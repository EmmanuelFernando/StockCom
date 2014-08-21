<?php
/* @var $this AsignacionesController */
/* @var $data Asignaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destino_id')); ?>:</b>
	<?php echo CHtml::encode($data->destino_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bien_id')); ?>:</b>
	<?php echo CHtml::encode($data->bien_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('existencia')); ?>:</b>
	<?php echo CHtml::encode($data->existencia); ?>
	<br />


</div>