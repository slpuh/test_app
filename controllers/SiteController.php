<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\AddEmployee;
use app\models\Employee;
use yii\web\UploadedFile;
use app\models\Project;
use app\models\EmployeeProject;
use yii\data\Pagination;


class SiteController extends Controller
{
  
  public function actions()
  {
    return [
      'error' => [
        'class' => 'yii\web\ErrorAction',
      ],
      'captcha' => [
        'class' => 'yii\captcha\CaptchaAction',
        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
      ],
    ];
  }  
   

  public function actionIndex()
  
  {  
    $employee = new Employee();       
    
    $query = Employee::find()->orderBy(['id'=>SORT_DESC]);
    
    $countQuery = clone $query;
    $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 4]);
    $pages->pageSizeParam = false;
    $model = $query->offset($pages->offset)
    ->limit($pages->limit)
    ->all();
    

    return $this->render('index', compact('model', 'pages', 'employee'));
  }   
  
  public function actionAddEmployee()            
  {
   $model = new AddEmployee();
   
   if ($model->load(Yii::$app->request->post()) && $model->validate()) { 
    
     $model->photo = UploadedFile::getInstance($model, 'photo');   
     if ($model->photo){
       $model->upload();              
       $model->photo = $model->photo->baseName . '.' . $model->photo->extension;   
     }
     else {$model->photo = 'avatar-non.png';}
     $email = $model->email;
     $project_id = $model->project_id;
     $model->project_id = implode(",", $model->project_id);
     
     $model->save();
     foreach ($project_id as $p_id) {
       $employee_project = new EmployeeProject();
       
       $employee_id = Employee::find()->where(['email'=>$email])->one();           
       
       $employee_project->project_id = $p_id;
       
       $employee_project->employee_id =$employee_id->id;
       $employee_project->save(false);
     }
     
     return $this->refresh();
   }
   
   $projects = new Project();
   $projects_list = $projects->allProjects();
   
   
   return $this->render('add-employee', compact('model', 'projects_list'));
 }  
 
 public function actionSearch()
 {
  $data = Yii::$app->request->get('search');        
  $model = Employee::find()->andFilterWhere(['like', 'name', $data])->all();       
  
  
  return $this->renderAjax('search', compact('model'));
}

}
