<?php

class EquipmentusageController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array('rights');
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
				'actions'=>array('index','view','addusage','updateusage','getusage'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin','*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	 }

	public function actionGetUsage(){
		$data = CJSON::decode($_POST["data"]);
		// $usages = Equipmentusage::model()->findByAttributes(array('equipmentID'=>'1','condition'=>'equipmentID LIKE "2016-03-07%"')
		// 	);
		$criteria = new CDbCriteria;
		$criteria->condition = 'equipmentID = "'.$data["id"].'" and usagestatus = "1"';
		$usages = Equipment::model()->find($criteria);
		// $equipment = Equipment::model()->findByAttributes(array("equipmentID"=>$data["id"]));
		//  echo CJSON::encode($usages);
		if($usages)
			echo "1";
		else
			echo "0";
		exit();
	}

	public function actionAddusage()
	{
		//$_POST["data"] = '{"event_name":"sample_event","start_date":"2015/01/01","end_date":"2015/01/01","venue":"sample_venue"}';

		$model = new Equipmentusage();

		$model->attributes = CJSON::decode($_POST['data']);
		$model->startdate = date("Y-m-d h:i:sa");
		$model->remarks = "Start Usage: ".$model->remarks;
		// if($_POST["data"]["usage"]==="s")
		// 	$model->startdate = date();
		// elseif ($_POST["data"]["usage"]==="e") {
		// 	//find the record with the same equipment id 
		// }
		$response = array();

		  //save model, if that fails, get its validation errors:
		  if ($model->save() === false) {
		    $response['success'] = false;
		    $response['errors'] = $model->errors;
		  } else {
		    $response['success'] = true;
		    
		    //respond with the saved contact in case the model/db changed any values
		    $response['model'] = $model; 


		    //update the equipment usagestatus into "1" as inuse 
		    $equipment = Equipment::model()->find(array('condition'=>'equipmentID ="'.$model->equipmentID.'"'));
		    $equipment->usagestatus = 1;
		    $equipment->save();
		  }

		  header('Content-type:application/json');

		  //encode the response as json:
		  echo CJSON::encode($response);
		  //echo $_POST['data'];
		  //use exit() if in debug mode and don't want to return debug output
		  exit();
	}


	public function actionUpdateusage(){
		$modeltmp = new Equipmentusage();
		$modeltmp->attributes = CJSON::decode($_POST['data']);

		$model = Equipmentusage::model()->find(
			array(
				'condition'=>'EquipmentID="'.$modeltmp->equipmentID.'"',
				'order'=>'startdate DESC'
			)
		);
		$model->enddate = date("Y-m-d h:i:s");
		$model->remarks = $model->remarks."\n End Usage: ".$modeltmp->remarks;
		$response = array();

		  //save model, if that fails, get its validation errors:
		  if ($model->save() === false) {
		    $response['success'] = false;
		    $response['errors'] = $model->errors;
		  } else {
		    $response['success'] = true;
		    
		    //respond with the saved contact in case the model/db changed any values
		    $response['model'] = $model; 

		    //return the equipment usagestatus into "0" as not use 
		    $equipment = Equipment::model()->find(array('condition'=>'equipmentID ="'.$model->equipmentID.'"'));
		    $equipment->usagestatus = 0;
		    $equipment->save();
		  }

		  header('Content-type:application/json');

		  //encode the response as json:
		  echo CJSON::encode($response);
		  //echo $_POST['data'];
		  //use exit() if in debug mode and don't want to return debug output
		  exit();
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Equipmentusage;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Equipmentusage']))
		{
			$model->attributes=$_POST['Equipmentusage'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Equipmentusage']))
		{
			$model->attributes=$_POST['Equipmentusage'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Equipmentusage');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Equipmentusage('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Equipmentusage']))
			$model->attributes=$_GET['Equipmentusage'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Equipmentusage the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Equipmentusage::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Equipmentusage $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='equipmentusage-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
