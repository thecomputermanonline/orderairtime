<?php
/** @var BookingsController $this */
/** @var Bookings $model */
$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	//('label' => Yii::t('AweCrud.app', 'List') . ' ' . Bookings::label(2), 'icon' => 'list', 'url' => array('index'),),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Bookings::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('bookings-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Bookings::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'bookings-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'title',
        'first_name',
        'last_name',
        'email',
        'company',
        
        /*'street_address',
        'city',
        'telephone',
        'radio_show_name',
        'quarter',
        'time_belt',
        'duration',
        'belt_day',
        'referral_name',
        'referral_tel_number',
        'date',
        */
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>
</fieldset>