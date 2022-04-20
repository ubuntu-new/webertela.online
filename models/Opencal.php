<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "opencal".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $visible
 */
class Opencal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'opencal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
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
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'title_ge' => 'Title Ge',
            'description_ge' => 'Description Ge',
            'visible' => 'Visible',
        ];
    }
}
