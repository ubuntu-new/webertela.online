<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "works".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $created
 * @property string $visible
 * @property string $filtercategory
 * @property string $top if top show somwere
 * @property resource $url site Url
 * @property string $facebook
 * @property string $year Published year
 */
class Works extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'works';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description_ge', 'created', 'url', 'facebook', 'year'], 'required'],
            [['description', 'description_ge', 'visible', 'filtercategory', 'top'], 'string'],
            [['img', 'title', 'title_ge', 'created', 'url', 'facebook', 'year'], 'string', 'max' => 255],
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
            'created' => 'Created',
            'visible' => 'Visible',
            'filtercategory' => 'Filtercategory',
            'top' => 'Top',
            'url' => 'Url',
            'facebook' => 'Facebook',
            'year' => 'Year',
        ];
    }
}
