<?php

class RestEquipmentsController extends Controller
{
	public function actionIndex()
	{
		//$this->render('index');
		echo "hahaha"; exit();
	}


	public function actionConnectionTest(){
		echo "1";
	}

	public function actionGetEquipment(){
		$data = CJSON::decode($_POST["data"]);
		$equipment = Equipment::model()->findByAttributes(array("equipmentID"=>$data["barcode"]));
		echo CJSON::encode($equipment);
		exit();
	}

	public function actionGetstatus(){
		$statuses = Equipmentstatus::model()->findAll();
		echo CJSON::encode($statuses);
		exit();
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

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}