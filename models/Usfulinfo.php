<?php

namespace app\models;

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
 * @property string $email
 * @property string $facebook
 * @property string $url
 * @property string $date
 * @property string $visible
 * @property string $author
 * @property string $position
 */
class Usfulinfo extends \yii\db\ActiveRecord
{
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
            'id' => Yii::t('usfulinfo', 'ID'),
            'img' => Yii::t('usfulinfo', 'Img'),
            'title' => Yii::t('usfulinfo', 'Title'),
            'description' => Yii::t('usfulinfo', 'Description'),
            'title_ge' => Yii::t('usfulinfo', 'Title Ge'),
            'description_ge' => Yii::t('usfulinfo', 'Description Ge'),
            'email' => Yii::t('usfulinfo', 'Email'),
            'facebook' => Yii::t('usfulinfo', 'Facebook'),
            'url' => Yii::t('usfulinfo', 'Url'),
            'date' => Yii::t('usfulinfo', 'Date'),
            'visible' => Yii::t('usfulinfo', 'Visible'),
            'author' => Yii::t('usfulinfo', 'Author'),
            'position' => Yii::t('usfulinfo', 'Position'),
        ];
    }
}
