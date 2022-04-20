<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $visible
 */
class Team extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'title', 'title_ge', 'description_ge'], 'required'],
            [['description', 'description_ge', 'visible'], 'string'],
            [['img', 'title', 'title_ge'], 'string', 'max' => 255],

            [['image'], 'file', 'extensions' => 'png, jpg'],
//            [['gallery'], 'file', 'extentions' => 'png,jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'title' => 'Title',
            'description' => 'Description',
            'title_ge' => 'Title Ge',
            'description_ge' => 'Description Ge',
            'visible' => 'Visible',
        ];
    }

    public function upload(){
        if($this->validate()){
            $path = 'img/store/'. $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }
}
