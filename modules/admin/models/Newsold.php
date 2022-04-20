<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "news_old".
 *
 * @property int $id
 * @property int $position
 * @property string $title_ge
 * @property string $title
 * @property string $description_ge
 * @property string $description
 * @property string $img
 * @property string $date
 * @property int $year
 * @property int $visible
 * @property int $author
 */
class Newsold extends \yii\db\ActiveRecord
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
        return 'news_old';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ge', 'title', 'description_ge', 'description', ], 'required'],
            [['position', 'year', 'visible', 'author'], 'integer'],
            [['description_ge', 'description'], 'string'],
            [['date','position','img', 'date', 'year', 'visible'], 'safe'],
            [['title_ge', 'title', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('usfulinfo', 'ID'),
            'position' => Yii::t('usfulinfo', 'Position'),
            'title_ge' => Yii::t('usfulinfo', 'Title Ge'),
            'title' => Yii::t('usfulinfo', 'Title'),
            'description_ge' => Yii::t('usfulinfo', 'Description Ge'),
            'description' => Yii::t('usfulinfo', 'Description'),
            'img' => Yii::t('usfulinfo', 'Img'),
            'date' => Yii::t('usfulinfo', 'Date'),
            'year' => Yii::t('usfulinfo', 'Year'),
            'visible' => Yii::t('usfulinfo', 'Visible'),
            'author' => Yii::t('usfulinfo', 'Author'),
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
