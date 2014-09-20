<?php
/* @var $this InfoController */
/* @var $data Info */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity')); ?>:</b>
	<?php echo CHtml::encode($data->activity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_type')); ?>:</b>
	<?php echo CHtml::encode($data->activity_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>