<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "movies".
 *
 * @property int $id
 * @property string $title_ge
 * @property string $title
 * @property string $director
 * @property string $duration
 * @property string $production
 * @property string $iscolored
 * @property string $description_ge
 * @property string $description
 * @property string $image
 * @property string $main_image
 * @property string $_video
 * @property string $date
 * @property string $date_released
 * @property int $year
 * @property string $link_ge
 * @property string $link_en
 * @property string $time
 * @property int $filterday
 * @property string $filtercategory
 * @property string $filterletter
 * @property string $starter
 * @property string $closer
 * @property string $bestff
 * @property string $bestffn
 * @property int $section
 * @property int $country
 * @property string $visible
 * @property int $author
 */
class Movies extends \yii\db\ActiveRecord
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
            [['title_ge', 'title', 'description_ge', 'description', 'duration', 'iscolored',  'year',  'filterday', 'filtercategory', 'filterletter'], 'required'],
            [['production', 'iscolored', 'description_ge', 'description', 'filtercategory', 'starter', 'closer', 'bestff', 'bestffn', 'visible'], 'string'],
            [['date'], 'safe'],
            [['year', 'filterday', 'section', 'country', 'author'], 'integer'],
            [['title_ge'], 'string', 'max' => 200],
            [['director','director_array'],'safe'],
            [['title', 'duration', 'main_image', '_video', 'link_en', 'filterletter'], 'string', 'max' => 255],
            [['date_released'], 'string', 'max' => 20],
            [['link_ge'], 'string', 'max' => 250],
            [['time'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('items', 'ID'),
            'title_ge' => Yii::t('items', 'Title Ge'),
            'title' => Yii::t('items', 'Title'),
            'director' => Yii::t('items', 'Director'),
            'duration' => Yii::t('items', 'Duration'),
            'production' => Yii::t('items', 'Production'),
            'iscolored' => Yii::t('items', 'Iscolored'),
            'description_ge' => Yii::t('items', 'Description Ge'),
            'description' => Yii::t('items', 'Description'),
            'image' => Yii::t('items', 'Image'),
            'main_image' => Yii::t('items', 'Main Image'),
            '_video' => Yii::t('items', 'Video'),
            'date' => Yii::t('items', 'Date'),
            'date_released' => Yii::t('items', 'Date Released'),
            'year' => Yii::t('items', 'Year'),
            'link_ge' => Yii::t('items', 'Link Ge'),
            'link_en' => Yii::t('items', 'Link En'),
            'time' => Yii::t('items', 'Time'),
            'filterday' => Yii::t('items', 'Filterday'),
            'filtercategory' => Yii::t('items', 'Filtercategory'),
            'filterletter' => Yii::t('items', 'Filterletter'),
            'starter' => Yii::t('items', 'Starter'),
            'closer' => Yii::t('items', 'Closer'),
            'bestff' => Yii::t('items', 'Bestff'),
            'bestffn' => Yii::t('items', 'Bestffn'),
            'section' => Yii::t('items', 'Section'),
            'country' => Yii::t('items', 'Country'),
            'visible' => Yii::t('items', 'Visible'),
            'author' => Yii::t('items', 'Author'),
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
