<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $email
 * @property string $facebook
 * @property string $url
 * @property string $date
 * @property string $visible
 * @property string $author
 * @property string $position
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge', 'email', 'facebook', 'url', 'date', 'author', 'position'], 'required'],
            [['title', 'description', 'title_ge', 'description_ge', 'url', 'visible'], 'string'],
            [['date'], 'safe'],
            [['img', 'email', 'facebook', 'author', 'position'], 'string', 'max' => 255],
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
            'email' => Yii::t('archive', 'Email'),
            'facebook' => Yii::t('archive', 'Facebook'),
            'url' => Yii::t('archive', 'Url'),
            'date' => Yii::t('archive', 'Date'),
            'visible' => Yii::t('archive', 'Visible'),
            'author' => Yii::t('archive', 'Author'),
            'position' => Yii::t('archive', 'Position'),
        ];
    }
}
