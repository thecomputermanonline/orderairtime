<?php

Yii::import('application.modules.bookings.models.._base.BaseRadioShow');

class RadioShow extends BaseRadioShow
{
    /**
     * @return RadioShow
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'RadioShow|RadioShows', $n);
    }

}