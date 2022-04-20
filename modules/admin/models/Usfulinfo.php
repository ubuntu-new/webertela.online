<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "usful_info".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $url
 * @property string $date
 * @property string $visible
 * @property string $position
 */
class Usfulinfo extends \yii\db\ActiveRecord
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
        return 'usful_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description', 'description_ge'], 'required'],
            [['description', 'description_ge', 'visible'], 'string'],
            [['date', 'url', 'position'], 'safe'],
            [['img', 'title', 'title_ge', 'url', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('usfulinfo', 'ID'),
            'image' => Yii::t('usfulinfo', 'Img'),
            'title' => Yii::t('usfulinfo', 'Title'),
            'description' => Yii::t('usfulinfo', 'Description'),
            'title_ge' => Yii::t('usfulinfo', 'Title Ge'),
            'description_ge' => Yii::t('usfulinfo', 'Description Ge'),
            'url' => Yii::t('usfulinfo', 'Url'),
            'date' => Yii::t('usfulinfo', 'Date'),
            'visible' => Yii::t('usfulinfo', 'Visible'),
            'position' => Yii::t('usfulinfo', 'Position'),
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
