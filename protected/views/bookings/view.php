<?php
/** @var BookingsController $this */
/** @var Bookings $model */
$this->breadcrumbs=array(
	'Bookings'=>array('index'),
	$model->title,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Bookings::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Bookings::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Bookings::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'title',
        'first_name',
        'last_name',
        array(
                'name'=>'email',
                'type'=>'email'
            ),
        'company',
        'street_address',
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
	),
)); ?>
</fieldset>