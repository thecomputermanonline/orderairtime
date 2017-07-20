<?php
/** @var TimeBeltController $this */
/** @var TimeBelt $data */
?>
<div class="view">
                    
        <?php if (!empty($data->time_belt_title)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('time_belt_title')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->time_belt_title); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->amount)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->amount); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->description)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->description); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>