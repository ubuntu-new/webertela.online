<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jury".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $email
 * @property string $facebook
 * @property string $linkedin
 * @property string $twitter
 * @property string $visible
 */
class Jury extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'jury';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge','description', 'email', 'contry' ], 'required'],
            [['img','visible'], 'string'],
            [['img', 'title', 'title_ge', 'email', 'facebook', 'linkedin', 'twitter'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'title' => 'Title',
            'description' => 'Description',
            'title_ge' => 'Title Ge',
            'description_ge' => 'Description Ge',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'contry' => 'Linkedin',
            'twitter' => 'Twitter',
            'visible' => 'Visible',
            'year' => 'Year',
        ];
    }
}
