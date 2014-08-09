<?php
/* @var $this RegistrationController */
/* @var $model Registration */

$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Registration', 'url'=>array('index')),
	array('label'=>'Create Registration', 'url'=>array('create')),
	array('label'=>'Update Registration', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Registration', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registration', 'url'=>array('admin')),
);
?>

<h1>View Registration #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'firstname',
		'lastname',
		'email',
		'phone_number',
		'address',
	),
)); ?>
