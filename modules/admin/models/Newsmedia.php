<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "newsmedia".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $visible
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
            [['title', 'title_ge', 'description_ge'], 'required'],
            [['title', 'description', 'title_ge', 'description_ge', 'visible'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('usfulinfo', 'ID'),
            'title' => Yii::t('usfulinfo', 'Title'),
            'description' => Yii::t('usfulinfo', 'Description'),
            'title_ge' => Yii::t('usfulinfo', 'Title Ge'),
            'description_ge' => Yii::t('usfulinfo', 'Description Ge'),
            'visible' => Yii::t('usfulinfo', 'Visible'),
        ];
    }
}
