<?php
/** @var RadioShowController $this */
/** @var RadioShow $model */
$this->breadcrumbs = array(
	'Radio Shows',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . RadioShow::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo RadioShow::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>