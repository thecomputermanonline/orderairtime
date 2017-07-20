<?php

/**
 * This is the model base class for the table "Bookings".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Bookings".
 *
 * Columns in table "Bookings" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $company
 * @property string $street_address
 * @property string $city
 * @property string $telephone
 * @property string $radio_show_name
 * @property string $quarter
 * @property string $time_belt
 * @property string $duration
 * @property string $belt_day
  * @property string $amount
 * @property string $referral_name
 * @property string $referral_tel_number
 * @property string $date
 *
 */
abstract class BaseBookings extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'Bookings';
    }

    public static function representingColumn() {
        return 'id';
    }

    public function rules() {
        return array(
            array('title, first_name, last_name, email, company, street_address, city, telephone, radio_show_name, quarter, time_belt, duration, belt_day, referral_name, referral_tel_number', 'required'),
            array('title, first_name, last_name, email, company, street_address, city, telephone, radio_show_name, quarter, time_belt, duration, belt_day, amount, referral_name, referral_tel_number', 'length', 'max'=>255),
            array('id, title, first_name, last_name, email, company, street_address, city, telephone, radio_show_name, quarter, time_belt, duration, belt_day, amount, referral_name, referral_tel_number, date', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'Order ID'),
                'title' => Yii::t('app', 'Title'),
                'first_name' => Yii::t('app', 'First Name'),
                'last_name' => Yii::t('app', 'Last Name'),
                'email' => Yii::t('app', 'Email'),
                'company' => Yii::t('app', 'Company'),
                'street_address' => Yii::t('app', 'Street Address'),
                'city' => Yii::t('app', 'City'),
                'telephone' => Yii::t('app', 'Telephone'),
                'radio_show_name' => Yii::t('app', 'Radio Show Name'),
                'quarter' => Yii::t('app', 'Quarter'),
                'time_belt' => Yii::t('app', 'Time Belt'),
                'duration' => Yii::t('app', 'Duration'),
                'belt_day' => Yii::t('app', 'Belt Day'),
				 'amount' => Yii::t('app', 'Amount to Pay + vat@5% inclusive'),
                'referral_name' => Yii::t('app', 'Referral Name'),
                'referral_tel_number' => Yii::t('app', 'Referral Tel Number'),
                'date' => Yii::t('app', 'Date'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('first_name', $this->first_name, true);
        $criteria->compare('last_name', $this->last_name, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('company', $this->company, true);
        $criteria->compare('street_address', $this->street_address, true);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('telephone', $this->telephone, true);
        $criteria->compare('radio_show_name', $this->radio_show_name, true);
        $criteria->compare('quarter', $this->quarter, true);
        $criteria->compare('time_belt', $this->time_belt, true);
        $criteria->compare('duration', $this->duration, true);
        $criteria->compare('belt_day', $this->belt_day, true);
		 $criteria->compare('amount', $this->amount, true);
        $criteria->compare('referral_name', $this->referral_name, true);
        $criteria->compare('referral_tel_number', $this->referral_tel_number, true);
        $criteria->compare('date', $this->date, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}