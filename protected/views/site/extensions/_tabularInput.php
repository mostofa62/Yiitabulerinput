<?php $level=array(null=>'select','ssc'=>'S.S.C','hsc'=>'H.S.C','honours'=>'Honours'); ?>

<div class="simple">
	<?php echo $index.CHtml::activeLabelEx($model,"level_of_education"); ?>
	<?php echo CHtml::activeDropDownList($model,"[$index]level_of_education",$level); ?>
	<?php echo CHtml::error($model,"[$index]level_of_education"); ?>
</div>

<div class="simple">
	<?php echo CHtml::activeLabelEx($model,"degree"); ?>
	<?php echo CHtml::activeTextField($model,"[$index]degree"); ?>
	<?php echo CHtml::error($model,"[$index]degree"); ?>
</div>
<div class="simple">
	<?php //echo CHtml::activeLabelEx($model,"degree"); ?>
	<?php echo CHtml::activeHiddenField($model,"[$index]user_id",array('value'=>3)); ?>
	<?php //echo CHtml::error($model,"[$index]degree"); ?>
</div>

<!--
<div class="simple">
	<?php /*echo $index.$form->LabelEx($model,"level_of_education"); ?>
	<?php echo  $form->dropDownList($model,"[$index]level_of_education",$level); ?>
	<?php echo  $form->error($model,"[$index]level_of_education"); ?>
</div>

<div class="simple">
	<?php echo  $form->LabelEx($model,"degree"); ?>
	<?php echo  $form->textField($model,"[$index]degree"); ?>
	<?php echo  $form->error($model,"[$index]degree"); ?>
</div>
<div class="simple">
	<?php //echo CHtml::activeLabelEx($model,"degree"); ?>
	<?php echo  $form->hiddenField($model,"[$index]user_id",array('value'=>1)); */?>
	<?php //echo CHtml::error($model,"[$index]degree"); ?>
</div>
-->