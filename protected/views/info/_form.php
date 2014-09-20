<?php
/* @var $this InfoController */
/* @var $model Info */
/* @var $form CActiveForm */
$type=array("PHP","JAVA","C#");

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'info-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    
    <?php  foreach($type as $t): ?>
    					    
	<div class="row">
		<?php echo CHtml::label($t,$t); ?>
        <?php //echo $form->hiddenField($model,'activity_type',array('value'=>$t)); ?>		
		<?php echo $form->textArea($model,'activity'."[$t]",array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'activity'); ?>
	</div>

	<?php endforeach; ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->hiddenField($model,'user_id',array('value'=>1)); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->