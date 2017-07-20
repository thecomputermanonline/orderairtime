<?php
/** @var RadioShowController $this */
/** @var RadioShow $data */
?>
<div class="view">
                    
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
                
        <?php if (!empty($data->Description)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->Description); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>