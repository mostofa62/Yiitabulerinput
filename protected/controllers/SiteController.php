<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
			'addTabularInputs'=>array(
				'class'=>'ext.actions.XTabularInputAction',
				'modelName'=>'UsersCvEducation',
				'viewName'=>'/site/extensions/_tabularInput',
			),
			'addTabularInputsWork'=>array(
				'class'=>'ext.actions.XTabularInputAction',
				'modelName'=>'UsersCvWorkExperience',
				'viewName'=>'/site/extensions/_tabularInputwork',
			),
			
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
	$id=isset($_GET['id'])?$_GET['id']:null;
	
		 
	
	//education	 
	$items=$this->getItemsToUpdate('UsersCvEducation','cv_edu_id',$id);	
    if(isset($_POST['UsersCvEducation']))
    {
	
	
        $valid=true;
        foreach($items as $i=>$item)
        {
            if(isset($_POST['UsersCvEducation'][$i]))
                $item->attributes=$_POST['UsersCvEducation'][$i];
            $valid=$item->validate() && $valid;
        }
		
		
        if($valid)
        {
		
		foreach($items as $i=>$item)
        {
		$item->save();
		}
		
		}
		
		
    }
	
	//work experience
	$works=$this->getItemsToUpdate('UsersCvWorkExperience','cv_work_exp_id',$id);
	if(isset($_POST['UsersCvWorkExperience']))
    {
	
	
        $valid=true;
        foreach($works as $i=>$work)
        {
            if(isset($_POST['UsersCvWorkExperience'][$i]))
                $work->attributes=$_POST['UsersCvWorkExperience'][$i];
            $valid=$work->validate() && $valid;
        }
		
		
        if($valid)
        {
		
		foreach($works as $i=>$work)
        {
	
		$work->save();
		}
		
		}
		
		
    }
	
	
	
    
		
		$this->render('index',array('items'=>$items,'works'=>$works));
	}
	
	public function getItemsToUpdate($model,$index,$id,$len=1) {
        // Create an empty list of records
        $items = array();
		$len=isset($_POST[''.$model.''])?count($_POST[''.$model.'']):$len;
		if($id!=null)
		{
		$criteria = new CDbCriteria();
        $criteria->condition = 'user_id='.$id;	
        $criteria->index=$index;		
		$items = $model::model()->findAll($criteria);
		$extinglen=count($items);		
		if($len>$extinglen)
		{
		
		$newlen=$len-$extinglen;		
		$decreselen=$len;
		for($i=1;$i<=$newlen;$i++)
		{		
		$items[]= new $model;				
		}
		
		}
		
		}
		else
		{
		for($i=1;$i<=$len;$i++)
		{
		$items[$i]= new $model;		
		}
        }
        
		
        return $items;
    }
	
	

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionTest()
	{
	
	$model=new Multi;
	
	}
}