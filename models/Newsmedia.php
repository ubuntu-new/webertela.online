<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "newsmedia".
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
 * @property string $source
 * @property string $position
 */
class Newsmedia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newsmedia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge', 'url', 'date', 'source', 'position'], 'required'],
            [['title', 'description', 'title_ge', 'description_ge', 'url', 'visible'], 'string'],
            [['date'], 'safe'],
            [['img', 'source', 'position'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('archive', 'ID'),
            'img' => Yii::t('archive', 'Img'),
            'title' => Yii::t('archive', 'Title'),
            'description' => Yii::t('archive', 'Description'),
            'title_ge' => Yii::t('archive', 'Title Ge'),
            'description_ge' => Yii::t('archive', 'Description Ge'),
            'url' => Yii::t('archive', 'Url'),
            'date' => Yii::t('archive', 'Date'),
            'visible' => Yii::t('archive', 'Visible'),
            'source' => Yii::t('archive', 'Source'),
            'position' => Yii::t('archive', 'Position'),
        ];
    }
}
