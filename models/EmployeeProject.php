<?php

namespace app\models;



class EmployeeProject extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'employee_projects';
    }

    
    public function rules()
    {
        return [
            [['employee_id', 'project_id'], 'required'],
            [['employee_id'], 'integer'],
        ];
    }

    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_id' => 'Employee ID',
            'project_id' => 'Project ID',
        ];
    }
}
