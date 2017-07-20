<?php

Yii::import('application.modules.bookings.models.._base.BaseTimeBelt');

class TimeBelt extends BaseTimeBelt
{
    /**
     * @return TimeBelt
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'TimeBelt|TimeBelts', $n);
    }

}