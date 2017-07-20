<?php
/** @var BookingsController $this */
/** @var Bookings $data */
?>
<div class="view">
                    
        <?php if (!empty($data->title)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->title); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->first_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->first_name); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->last_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->last_name); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->email)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::mailto($data->email); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->company)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->company); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->street_address)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('street_address')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->street_address); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->city)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->city); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->telephone)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->telephone); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->radio_show_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('radio_show_name')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->radio_show_name); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->quarter)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('quarter')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->quarter); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->time_belt)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('time_belt')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->time_belt); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->duration)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->duration); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->belt_day)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('belt_day')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->belt_day); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->referral_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('referral_name')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->referral_name); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->referral_tel_number)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('referral_tel_number')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->referral_tel_number); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->date)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->date, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->date)); ?>
                            </div>
        </div>

        <?php endif; ?>
    </div>