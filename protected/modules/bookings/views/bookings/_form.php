<?php          
 $this->widget('ext.sformwizard.SFormWizard',array(
    'selector'=>"#bookings-form", //change this to the jquery selector for your form
	 'disableUIStyles' => "true",
	 'historyEnabled' =>"true",
	 'back' => ":reset",
    //'next' => ":submit",
    'textSubmit' => "Last",
   // 'textNext' => "Next",
    'textBack' =>"Back",
	//'formPluginEnabled' =>true,
				 	'validationEnabled'=> true,
				 	'focusFirstInput' => true,
    ));
 ?>
<div class="form">
    <?php
    /** @var BookingsController $this */
    /** @var Bookings $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'bookings-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> true,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>
      <span class="step" id="first">
      	<span class="font_normal_07em_black">First step - Personal Details</span><br />
			             <?php echo $form->dropDownListRow($model, 'title', array('Mr' => 'Mr', 'Mrs' => 'Mrs','Miss' => 'Miss', 'Sir' => 'Sir')) ?>
                        <?php echo $form->textFieldRow($model, 'first_name', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'last_name', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'email', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'company', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'street_address', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'city', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'telephone', array('class' => 'span5', 'maxlength' => 255)) ?>
                        </span>
                            <span class="step" id="Second">
                            	<span class="font_normal_07em_black">2nd step - Airtime Details</span><br />
                        <?php echo $form->dropDownListRow($model, 'radio_show_name', $radioshowname, array('empty' => '(Select a show)')) ?>
                        
			             <?php echo $form->dropDownListRow($model, 'quarter', array('JAN 1ST - MAR 31ST' => '1st Quarter JAN 1ST - MAR 31ST', 'APRIL 1ST - JUNE 31ST  ' => '2nd Quarter APRIL 1ST - JUNE 31ST', 'APRIL 1ST - JUNE 31ST' => '3rd Quarter  JULY 1ST - SEPT 30TH','OCT 1ST - DEC 31ST' => '4th Quarter OCT 1ST - DEC 31ST',)) ?>
                     <?php echo $form->dropDownListRow($model, 'time_belt', $timebelttitle , array('empty' => '(Select a belt)')) ?>
                    <?php echo $form->dropDownListRow($model, 'duration', array('15' => '15 Mins', '30' => '30 Mins','60' => '60 Mins')) ?>
                    
                        
                        <?php echo $form->dropDownListRow($model, 'belt_day', array('Mon' => 'Mon', 'Tue' => 'Tue', 'Wed' => 'Wed', 'Thur' => 'Thur', 'Fri' => 'Fri', 'Sat' => 'Sat', 'Sun' => 'Sun')) ?>
                        </span>
                            <span class="step submit_step" id="3rd">
                            <span class="font_normal_07em_black">3rd step - Referral Details</span><br />
                        <?php echo $form->textFieldRow($model, 'referral_name', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php echo $form->textFieldRow($model, 'referral_tel_number', array('class' => 'span5', 'maxlength' => 255)) ?>
                        <?php //echo $form->textFieldRow($model, 'date', array('class' => 'span5')) ?>
                        </span>
                <div class="form-actions">
                <input type="reset" id="back" value="Reset" />
             <!--   <input type="submit" id="next" value="Next" />-->
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			//'id'=>'next',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Save') : Yii::t('AweCrud.app', 'Update'),
		)); ?>
       <?php /*?> <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			//'id'=>'back',
			
		'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?><?php */?>
        
    </div>

    <?php $this->endWidget(); ?>
</div>