<?php

namespace app\models;

use Yii;
use yii\imagine\Image;

class AddEmployee extends \yii\db\ActiveRecord
{
 
    public static function tableName()
    {
        return 'employees';
    }    
    
    public function rules()
    {
        return [
            [['name','sociability', 'engineering_skills', 'time_management', 'languages', 'email'], 'required'],
            [['sociability', 'engineering_skills', 'time_management', 'languages'], 'number','min'=>0,'max'=>10],
            [['name'], 'string', 'max' => 255],            
            [[ 'project_id'], 'safe'],
            [[ 'photo'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 1024 * 1024 * 2],
            ['photo', 'image', 'minWidth' => 250,'minHeight' => 250],
            [['email'], 'email'],
            [['email'], 'unique']
            
        ];
    }

    
    public function upload(){
        if($this->validate()){            
            $this->photo->saveAs("images/uploads/{$this->photo->baseName}.{$this->photo->extension}");
            
            $img = Image::getImagine()->open(Yii::getAlias("images/uploads/{$this->photo->baseName}.{$this->photo->extension}"));
            $size = $img->getSize();
            if ($size->getHeight()>=$size->getWidth()) {
                Image::resize("images/uploads/{$this->photo->baseName}.{$this->photo->extension}", 250, null, [0, 0])
                ->save(Yii::getAlias("@webroot/images/uploads/250x250/{$this->photo->baseName}.{$this->photo->extension}"), ['quality' => 80]);
            } else {
                Image::resize("@webroot/images/uploads/{$this->photo->baseName}.{$this->photo->extension}", null, 250, [0,0])
                ->save(Yii::getAlias("@webroot/images/uploads/250x250/{$this->photo->baseName}.{$this->photo->extension}"), ['quality' => 80]);
            }
            $img_crop = Image::getImagine()->open(Yii::getAlias("images/uploads/250x250/{$this->photo->baseName}.{$this->photo->extension}"));
            $size_cop = $img_crop->getSize();
            $h = ($size_cop->getHeight()/2)-125;
            $w = ($size_cop->getWidth()/2)-125;
       
            if ($size_cop->getHeight()>=$size_cop->getWidth()) {
             Image::crop("@webroot/images/uploads/250x250/{$this->photo->baseName}.{$this->photo->extension}", 250, 250, [0,$h])
             ->save(Yii::getAlias("@webroot/images/uploads/250x250/{$this->photo->baseName}.{$this->photo->extension}"), ['quality' => 80]);
         } else {
           Image::crop("@webroot/images/uploads/250x250/{$this->photo->baseName}.{$this->photo->extension}", 250, 250, [$w,0])
           ->save(Yii::getAlias("@webroot/images/uploads/250x250/{$this->photo->baseName}.{$this->photo->extension}"), ['quality' => 80]);
       }
   }else{
    return false;
}
}

public function attributeLabels()
{
    return [
        'id' => 'ID',
        'name' => 'Surname Name',
        'photo' => 'Photo',
        'sociability' => 'Sociability',
        'engineering_skills' => 'Engineering Skills',
        'time_management' => 'Time Management',
        'languages' => 'Languages',
        'project_id' => 'Project ID',
    ];
}
}

