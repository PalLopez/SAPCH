<?php
/* @var $this Tipo_personal_externoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Personal Externos',
);

$this->menu=array(
	array('label'=>'Create TipoPersonalExterno', 'url'=>array('create')),
	array('label'=>'Manage TipoPersonalExterno', 'url'=>array('admin')),
);
?>

<h1>Tipo Personal Externos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
