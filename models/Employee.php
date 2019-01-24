<?php

namespace app\models;

use app\models\EmployeeProject;


class Employee extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'employees';
    }

    public function getProjects() {
        return $this->hasMany(EmployeeProject::className(), ['employee_id' => 'id']);
    }
    
    public function rules()
    {
        return [
            [['name', 'sociability', 'engineering_skills', 'time_management', 'languages','email'], 'required'],
            [['sociability', 'engineering_skills', 'time_management', 'languages', 'project_id'], 'integer'],
            [['name', 'photo'], 'string', 'max' => 255],
            [[ 'photo'], 'default'],
            [['email'], 'email'],
            [['email'], 'unique']
        ];
    }
    
    public function averageLevel($id){
        $levels = $this->find()->where(['id'=>$id])->all();
        foreach ($levels as $level){
            $av_level = ($level->time_management + $level->sociability + $level->engineering_skills + $level->languages)/4;
        }  
        
        return $av_level;
    }
    
    public function projectsCount($id){
        $projects = $this->find()->joinWith('projects')->where(['employee_id'=>$id])->count();
        
        return $projects;
    }
    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Surname Name',
            'email' => 'Email',
            'photo' => 'Photo',
            'sociability' => 'Sociability',
            'engineering_skills' => 'Engineering Skills',
            'time_management' => 'Time Management',
            'languages' => 'Languages',
            'project_id' => 'Project ID',
        ];
    }
}
