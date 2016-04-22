<?php

class Registrar_entradasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */

	/**
	 * @return array action filters
	 */
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
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('create'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new EntradasSalidas;
		date_default_timezone_set('America/Cancun');
		$model->fecha = date('Y-m-d');
		$model->hr_entrada = date('H:i:s', time());

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EntradasSalidas']))
		{
			$model->attributes=$_POST['EntradasSalidas'];
			if($model->save())
				$this->redirect('create');
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Performs the AJAX validation.
	 * @param EntradasSalidas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='entradas-salidas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
