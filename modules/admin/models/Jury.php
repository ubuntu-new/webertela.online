<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "jury".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $email
 * @property string $facebook
 * @property string $twitter
 * @property string $country
 * @property string $visible
 */
class Jury extends \yii\db\ActiveRecord
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

    public static function tableName()
    {
        return 'jury';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge', 'year'], 'required'],
            [['description', 'description_ge', 'visible'], 'string'],
            [['img', 'title', 'title_ge', 'email', 'facebook', 'twitter', 'country'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Img'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'title_ge' => Yii::t('app', 'Title Ge'),
            'description_ge' => Yii::t('app', 'Description Ge'),
            'year' => Yii::t('app', 'Year'),
            'visible' => Yii::t('app', 'Visible'),
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
