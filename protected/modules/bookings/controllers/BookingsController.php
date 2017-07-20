<?php

class BookingsController extends AweController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
    public $layout = '//layouts/column2';

public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('create','view','update', 'admin'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('admin','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		 // $this->layout = '//layouts/column1';
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		  $this->layout = '//layouts/column1';
		$model = new Bookings;
		
		$radioshow = RadioShow::model()->findAll(array('order' => 'radio_show_name'));
	$radioshowname =  CHtml::listData($radioshow, 
                'radio_show_name', 'radio_show_name');
	$timebelt = TimeBelt::model()->findAll(array('order' => 'time_belt_title'));
	$timebelttitle =  CHtml::listData($timebelt, 
                'time_belt_title', 'time_belt_title');

        $this->performAjaxValidation($model, 'bookings-form');

        if(isset($_POST['Bookings']))
		{
			$model->attributes = $_POST['Bookings'];
			$model->date = date("d.m.y");
			//if{$model->time_belt = 'A')
			$amount_to_pay_model = TimeBelt::model()->findByAttributes(array('time_belt_title'=>$_POST['Bookings'][time_belt]));
			$amount_to_pay= $amount_to_pay_model->amount;
				$model->amount=$amount_to_pay + $amount_to_pay * 0.05;
			if($model->save()) {
				$name='=?UTF-8?B?'.base64_encode('Rock City fm').'?=';
				$subject='=?UTF-8?B?'.base64_encode('Your Airtime Online order').'?=';
				$headers="From: $name <{info@hrdotnetsolutions.net}>\r\n".
					"Reply-To: {info@hrdotnetsolutions.net}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail('$model->email',$subject,'http://hrdotnetsolutions.net/orderairtime/index.php/bookings/bookings/view/id/'.$model->id,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
                $this->redirect(array('view', 'id' => $model->id));
            }
		}

		$this->render('create',array(
			'model' => $model,
			'radioshowname' => $radioshowname,
			'timebelttitle' => $timebelttitle,

		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		 $this->layout = '//layouts/column1';
		$model = $this->loadModel($id);
		$radioshow = RadioShow::model()->findAll(array('order' => 'radio_show_name'));
	$radioshowname =  CHtml::listData($radioshow, 
                'radio_show_name', 'radio_show_name');
	$timebelt = TimeBelt::model()->findAll(array('order' => 'time_belt_title'));
	$timebelttitle =  CHtml::listData($timebelt, 
                'time_belt_title', 'time_belt_title');

        $this->performAjaxValidation($model, 'bookings-form');

		if(isset($_POST['Bookings']))
		{
			$model->attributes = $_POST['Bookings'];
			$model->date = date("d.m.y");
			//if{$model->time_belt = 'A')
			$amount_to_pay_model = TimeBelt::model()->findByAttributes(array('time_belt_title'=>$_POST['Bookings'][time_belt]));
			$amount_to_pay= $amount_to_pay_model->amount;
			$model->amount=$amount_to_pay + $amount_to_pay * 0.05;
			if($model->save()) {
				$this->redirect(array('view','id' => $model->id));
            }
		}

		$this->render('update',array(
			'model' => $model,
			'radioshowname' => $radioshowname,
			'timebelttitle' => $timebelttitle,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Bookings');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	
	{
		 $this->layout = '//layouts/column1';
		$model = new Bookings('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['Bookings']))
			$model->attributes = $_GET['Bookings'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id, $modelClass=__CLASS__)
	{
		$model = Bookings::model()->findByPk($id);
		if($model === null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model, $form=null)
	{
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'bookings-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
