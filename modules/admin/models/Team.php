<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "team".
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
class Team extends \yii\db\ActiveRecord
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
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'title_ge', 'description', 'description_ge'], 'required'],
            [['description', 'description_ge', 'visible'], 'string'],
            [['img', 'title', 'title_ge', 'email', 'facebook', 'linkedin', 'twitter'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Img'),
            'title' => Yii::t('app', 'Full Name'),
            'description' => Yii::t('app', 'Description'),
            'title_ge' => Yii::t('app', 'Full Name Ge'),
            'description_ge' => Yii::t('app', 'Description Ge'),
            'email' => Yii::t('app', 'Email'),
            'facebook' => Yii::t('app', 'Facebook'),
            'linkedin' => Yii::t('app', 'Linkedin'),
            'twitter' => Yii::t('app', 'Twitter'),
            'visible' => Yii::t('app', 'Visible'),
        ];
    }

    public function upload(){
        if($this->validate()){
            $path = 'img/store/'. $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }
}
