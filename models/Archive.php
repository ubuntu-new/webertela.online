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
 * @property string $filterday
 * @property string $filterletter
 * @property string $filtercategory
 * @property string $starter
 * @property string $closer
 */
class Archive extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge', 'studio', 'director', 'email', 'directed', 'country', 'created', 'filterday', 'filterletter', 'filtercategory'], 'required'],
            [['description', 'description_ge', 'studio', 'directed', 'visible', 'starter', 'closer'], 'string'],
            [['created'], 'safe'],
            [['img', 'title', 'title_ge', 'director', 'email', 'country', 'filterday', 'filterletter', 'filtercategory'], 'string', 'max' => 255],
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
            'studio' => Yii::t('archive', 'Studio'),
            'director' => Yii::t('archive', 'Director'),
            'email' => Yii::t('archive', 'Email'),
            'directed' => Yii::t('archive', 'Directed'),
            'country' => Yii::t('archive', 'Country'),
            'created' => Yii::t('archive', 'Created'),
            'visible' => Yii::t('archive', 'Visible'),
            'filterday' => Yii::t('archive', 'Filterday'),
            'filterletter' => Yii::t('archive', 'Filterletter'),
            'filtercategory' => Yii::t('archive', 'Filtercategory'),
            'starter' => Yii::t('archive', 'Starter'),
            'closer' => Yii::t('archive', 'Closer'),
        ];
    }
}
