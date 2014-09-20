<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="form">


<?php echo CHtml::beginForm(); ?>
<?php /*$form=$this->beginWidget('CActiveForm', array(
	'id'=>'users_cv_education-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 
*/
?>

<?php $this->widget('ext.widgets.tabularinput.XTabularInput',array(
		'models'=>$items,
		/* mostofa add custom part */
		//'form'=>$form,
		/* end mostofa add custom part */
		'inputView'=>'extensions/_tabularInput',
		'inputUrl'=>$this->createUrl('site/addTabularInputs'),
		'removeUrl'=>$this->createUrl('site/addTabularInputs'),
		'removeTemplate'=>'<div class="action">{link}</div>',
		'addTemplate'=>'<div class="action">{link}</div>',
	));	?>

<?php echo CHtml::submitButton('Save'); ?>
<?php echo CHtml::endForm(); ?>
<?php //$this->endWidget(); ?>
</div>
<h2>Experience</h2>
<div class="form">


<?php //echo CHtml::beginForm(); ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users_cv_education-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 

?>

<?php $this->widget('ext.widgets.tabularinput.XTabularInput',array(
		'models'=>$works,
		/* mostofa add custom part */
		//'form'=>$form,
		/* end mostofa add custom part */
		'inputView'=>'extensions/_tabularInputwork',
		'inputUrl'=>$this->createUrl('site/addTabularInputsWork'),
		'removeUrl'=>$this->createUrl('site/addTabularInputsWork'),
		'removeTemplate'=>'<div class="action">{link}</div>',
		'addTemplate'=>'<div class="action">{link}</div>',
	));	?>

<?php echo CHtml::submitButton('Save'); ?>
<?php //echo CHtml::endForm(); ?>
<?php $this->endWidget(); ?>
</div>
