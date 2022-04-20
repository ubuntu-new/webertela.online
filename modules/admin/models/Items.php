<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $iscolored
 * @property string $duration
 * @property string $director
 * @property string $production
 * @property string $country
 * @property string $created
 * @property string $visible
 * @property string $filterday
 * @property string $filterletter
 * @property string $filtercategory
 * @property string $starter
 * @property string $closer
 * @property string $bestff
 * @property string $bestffn
 * @property resource $url
 * @property string $facebook
 */
class Items extends \yii\db\ActiveRecord
{
    public $image;
    public $gallery;
    public $director_array = [];

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
        return 'movies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description', 'description_ge'], 'required'],
            [['director','director_array'],'safe'],
            [['title', 'title_ge', 'duration', 'director', 'country', 'filterday', 'filterletter', 'filtercategory', 'url', 'facebook'], 'string', 'max' => 255],
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
            'iscolored' => Yii::t('items', 'Iscolored'),
            'duration' => Yii::t('items', 'Duration'),
            'director' => Yii::t('items', 'Director'),
            'production' => Yii::t('items', 'Production'),
            'country' => Yii::t('items', 'Country'),
            'created' => Yii::t('items', 'Created'),
            'visible' => Yii::t('items', 'Visible'),
            'filterday' => Yii::t('items', 'Filterday'),
            'filterletter' => Yii::t('items', 'Filterletter'),
            'filtercategory' => Yii::t('items', 'Filtercategory'),
            'starter' => Yii::t('items', 'Starter'),
            'closer' => Yii::t('items', 'Closer'),
            'bestff' => Yii::t('items', 'Bestff'),
            'bestffn' => Yii::t('items', 'Bestffn'),
            'url' => Yii::t('items', 'Url'),
            'facebook' => Yii::t('items', 'Facebook'),
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
