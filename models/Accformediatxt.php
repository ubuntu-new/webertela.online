<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accformediatxt".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $visible
 */
class Accformediatxt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accformediatxt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge'], 'required'],
            [['description', 'description_ge', 'visible'], 'string'],
            [['title', 'title_ge'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'title_ge' => Yii::t('app', 'Title Ge'),
            'description_ge' => Yii::t('app', 'Description Ge'),
            'visible' => Yii::t('app', 'Visible'),
        ];
    }
}
