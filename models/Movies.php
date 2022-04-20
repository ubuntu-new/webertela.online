<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movies".
 *
 * @property int $id
 * @property string $title_ge
 * @property string $title
 * @property string $description_ge
 * @property string $description
 * @property string $image
 * @property string $main_image
 * @property string $video
 * @property string $date
 * @property string $date_released
 * @property int $year
 * @property string $link_ge
 * @property string $link_en
 * @property string $time
 * @property int $filterday
 * @property int $section
 * @property int $country
 * @property int $visibility
 * @property int $author
 */
class Movies extends \yii\db\ActiveRecord
{
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
            [['title_ge', 'title'], 'required'],
            [['description_ge', 'description'], 'string'],
            [['date','visibility'], 'safe'],
            [['year', 'filterday', 'section',  'visibility', 'author'], 'integer'],
            [['title_ge'], 'string', 'max' => 200],
            [['title', 'image', 'main_image', 'video','country', 'link_en'], 'string', 'max' => 255],
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
            'id' => Yii::t('usfulinfo', 'ID'),
            'title_ge' => Yii::t('usfulinfo', 'Title Ge'),
            'title' => Yii::t('usfulinfo', 'Title'),
            'description_ge' => Yii::t('usfulinfo', 'Description Ge'),
            'description' => Yii::t('usfulinfo', 'Description'),
            'image' => Yii::t('usfulinfo', 'Image'),
            'main_image' => Yii::t('usfulinfo', 'Main Image'),
            'video' => Yii::t('usfulinfo', 'Video'),
            'date' => Yii::t('usfulinfo', 'Date'),
            'date_released' => Yii::t('usfulinfo', 'Date Released'),
            'year' => Yii::t('usfulinfo', 'Year'),
            'link_ge' => Yii::t('usfulinfo', 'Link Ge'),
            'link_en' => Yii::t('usfulinfo', 'Link En'),
            'time' => Yii::t('usfulinfo', 'Time'),
            'filterday' => Yii::t('usfulinfo', 'Filterday'),
            'section' => Yii::t('usfulinfo', 'Section'),
            'country' => Yii::t('usfulinfo', 'Country'),
            'visibility' => Yii::t('usfulinfo', 'Visibility'),
            'author' => Yii::t('usfulinfo', 'Author'),
        ];
    }
}
