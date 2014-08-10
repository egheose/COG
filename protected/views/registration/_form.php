<?php
/* @var $this RegistrationController */
/* @var $model Registration */
/* @var $form CActiveForm */
?>
<div class="row" style="...">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group float-label-control">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>25,'maxlength'=>25,
            "class"=>"form-control",
            "placeholder" => "Firstname")); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="form-group float-label-control">
		<?php echo $form->labelEx($model,'lastname', array("class"=>"control-label")); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>25,'maxlength'=>25,
            "class"=>"form-control",
            "placeholder" => "Lastname")); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>25,'maxlength'=>25,
            "class"=>"form-control",
            "placeholder" => "Email Address")); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>25,'maxlength'=>25,
            "class"=>"form-control",
            "placeholder" => "Mobile Number")); ?>
		<?php echo $form->error($model,'phone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assembly'); ?>
		<?php echo $form->textField($model,'assembly',array('size'=>25,'maxlength'=>25,
            "class"=>"form-control",
            "placeholder" => "Assembly")); ?>
		<?php echo $form->error($model,'assembly'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marital_status'); ?>
		<?php echo $form->dropDownList($model,'marital_status',array(''=>'','single'=>'Single','married'=>'Married')); ?>
		<?php echo $form->error($model,'marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropDownList($model,'gender',array(''=>'','male'=>'Male','female'=>'Female')); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_address'); ?>
		<?php echo $form->textField($model,'home_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'home_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proposed_arrival_date'); ?>
		<?php echo $form->dateField($model,'proposed_arrival_date'); ?>
		<?php echo $form->error($model,'proposed_arrival_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textField($model,'comments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comments'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->dateField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
		<?php echo $form->dateField($model,'date_of_birth'); ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="buttons submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn btn-lg btn-success btn-block")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
        </div>
</div>