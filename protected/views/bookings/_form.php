<div class="form">
    <?php
    /** @var BookingsController $this */
    /** @var Bookings $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'bookings-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'title', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'first_name', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'last_name', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'company', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'street_address', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'city', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'telephone', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'radio_show_name', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'quarter', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'time_belt', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'duration', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'belt_day', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'referral_name', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'referral_tel_number', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'date', array('class' => 'span5')) ?>
                <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>