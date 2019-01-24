<?php

namespace app\models;

use yii\helpers\ArrayHelper;


class Project extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'projects';
    }

    
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 50],
        ];
    }
    
    public function allProjects() {
        $projects = ArrayHelper::map($this::find()->all(),'id','title');
        return $projects;
    }

    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}