<?php
/* @var $this RegistrationController */
/* @var $model Registration */

$this->breadcrumbs=array(
	'Registrations'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Registration', 'url'=>array('index')),
	array('label'=>'Create Registration', 'url'=>array('create')),
	array('label'=>'View Registration', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Registration', 'url'=>array('admin')),
);
?>

<h1>Update Registration <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>