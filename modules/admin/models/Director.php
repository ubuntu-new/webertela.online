<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "director".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $visible
 */
class Director extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;
    /**
     * {@inheritdoc}
     */
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
        return 'director';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge'], 'required'],
            [['title', 'description', 'title_ge', 'description_ge', 'visible'], 'string'],
            [['image'], 'file', 'extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('items', 'ID'),
            'image' => Yii::t('items', 'Img'),
            'title' => Yii::t('items', 'Title'),
            'description' => Yii::t('items', 'Description'),
            'title_ge' => Yii::t('items', 'Title Ge'),
            'description_ge' => Yii::t('items', 'Description Ge'),
            'visible' => Yii::t('items', 'Visible'),
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
