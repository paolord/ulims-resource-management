<?php
/**
 * This is the template for generating a controller class file for CRUD feature.
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>

/**
 * DOST Onelab ULIMS REST API Controller Generator
 * Angelo Paolo S. Obispo <angelopaolo.obispo@gmail.com>
 */

class <?php echo $this->controllerClass; ?> extends <?php echo $this->baseControllerClass."\n"; ?>
{

    /**
     * @return array action filters
     */
    public function filters()
    {
       return array('AuthFilter');
    }
    /*
     * Custom code for API controller specific errors
     */
    public function init()
    {
        parent::init();
        Yii::app()->errorHandler->errorAction = $this->module->id.'/'.Yii::app()->controller->getId().'/error';
    }

    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error){
            header("HTTP/1.0 404 Not Found");
            echo 'endpoint not found';
            exit;
        }
    }
    /*
     * Authentication code for rest api for mobile phones
     * Attach to volley post request variables AUTH_USER and AUTH_PW with
     * with correct username and password of ULIMS users respectively.
     * RESTful APIs are stateless. Server does not contain any client state.
     * Mobile app client must store username and password on its own storage
     * only to be authenticated to REST API upon request of a resource.
     */
  public function filterAuthFilter($filterChain)
  {
      if (!isset($_POST['AUTH_USER']) || !isset($_POST['AUTH_PW'])) {
          header("HTTP/1.0 404 Not Found");
          echo 'Please attach a correct username-password combination to a request.';
          exit;
      } else {
          $user = Users::model()->find("username = '{$_POST['AUTH_USER']}' AND password = '".md5($_POST['AUTH_PW'])."'");

          if($user){
              $filterChain->run();
          } else {
              header("HTTP/1.0 404 Not Found");
              echo 'Please attach a correct username-password combination to a request.';
              exit;
          }
      }
  }
  /*
   * List all models
   */
    public function actionIndex(){
      $models = <?php echo $this->modelClass; ?>::model()->findAll();

      if(empty($models)){

          echo CJSON::encode(array("status" => "error"));
      } else {
          $rows = array();
          foreach($models as $model){
              $rows[] = $model->attributes;
          }
          echo CJSON::encode($rows);
      }
    }
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
        $model = $this->loadModel($id);

        if(empty($model)){
            echo CJSON::encode(array("status" => "error"));
        } else {
            $row = $model->attributes;
            echo CJSON::encode($row);
        }
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
   *
	 */
/*
Mobile REST API Usage for create endpoint ("<?php echo $this->controller;?>/create"):
Send these variables through POST method in volley library:
(POST variable name = POST variable value)
(Authentication)
AUTH_USER = *ULIMS username*
AUTH_PW = *ULIMS password*
(<?php echo $this->modelClass;?> array for model attributes)
<?php
foreach($this->tableSchema->columns as $column){
  if($column->name != $this->tableSchema->primaryKey){
    printf("%s[%s] = value\n",$this->modelClass,$column->name);
  }
}
?>
IMPORTANT NOTE: Do not add single or double quotes to enclose
                model attribute names. And always send all of
                the attributes, if no value send empty string
*/
	public function actionCreate()
	{
		$model=new <?php echo $this->modelClass; ?>;

		if(isset($_POST['<?php echo $this->modelClass; ?>']))
		{
			$model->attributes=$_POST['<?php echo $this->modelClass; ?>'];
			if($model->save()){
                echo CJSON::encode(array("status" => "data saved"));
                exit;
            }
		}

        echo CJSON::encode(array("status" => "no data sent"));
        exit;
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
/*
Same usage as create endpoint except attach an 'id' variable as GET data (e.g. "<?php echo $this->controller;?>/update?id=1")
where '1' is the id of model to be updated, then attach the authorization variables as POST data
then a set of <?php echo $this->modelClass; ?> model array.
e.g.
<?php echo $this->modelClass; ?>[attributename] = "updatedvalue"
*/
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['<?php echo $this->modelClass; ?>']))
		{
			$model->attributes=$_POST['<?php echo $this->modelClass; ?>'];
			if($model->save()){
              echo CJSON::encode(array("status" => "data saved"));
              exit;
            }
        }

        echo CJSON::encode(array("status" => "no data sent"));
        exit;
	}

  /*
  Same usage as update endpoint, attach an 'id' variable as GET data (e.g. "<?php echo $this->controller;?>/delete?id=1")
  where '1' is the id of model to be deleted.
  */
	public function actionDelete($id)
	{
		if($this->loadModel($id)->delete()){
          echo CJSON::encode(array("status" => "delete success"));
          exit;
        } else {
          echo CJSON::encode(array("status" => "delete fail"));
          exit;
        }

	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return <?php echo $this->modelClass; ?> the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=<?php echo $this->modelClass; ?>::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param <?php echo $this->modelClass; ?> $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='<?php echo $this->class2id($this->modelClass); ?>-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

}
