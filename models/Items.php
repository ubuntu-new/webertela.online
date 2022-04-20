<?php

namespace app\models;

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
 * @property string $studio
 * @property string $director
 * @property string $email
 * @property string $directed
 * @property string $country
 * @property string $created
 * @property string $visible
 */
class Items extends \yii\db\ActiveRecord
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
        return 'items';
    }
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description', 'description_ge', 'studio', 'directed', 'visible'], 'string'],
            [['img', 'title', 'title_ge', 'director', 'email', 'country'], 'string', 'max' => 255],

            [['image'], 'file', 'extensions' => 'png, gif, jpg',]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('partnerts', 'ID'),
            'image' => Yii::t('partnerts', 'image'),
            'title' => Yii::t('partnerts', 'Title'),
            'description' => Yii::t('partnerts', 'Description'),
            'title_ge' => Yii::t('partnerts', 'Title Ge'),
            'description_ge' => Yii::t('partnerts', 'Description Ge'),
            'studio' => Yii::t('partnerts', 'Studio'),
            'director' => Yii::t('partnerts', 'Director'),
            'email' => Yii::t('partnerts', 'Email'),
            'directed' => Yii::t('partnerts', 'Directed'),
            'country' => Yii::t('partnerts', 'Country'),
            'created' => Yii::t('partnerts', 'Created'),
            'visible' => Yii::t('partnerts', 'Visible'),
        ];
    }

}
