<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accformedia".
 *
 * @property int $id
 * @property string $img
 * @property string $title
 * @property string $description
 * @property string $title_ge
 * @property string $description_ge
 * @property string $email
 * @property string $facebook
 * @property string $twitter
 * @property string $country
 * @property string $visible
 */
class Accformedia extends \yii\db\ActiveRecord
{

    public $image;
    public $gallery;

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
        return 'accformedia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'company', 'position', 'email'], 'required'],
            [['visible'], 'string'],
            /*[['img', 'fullname', 'company', 'position', 'email', 'usedphonenumber','companyaddress','phonefax','mobilephone'], 'string', 'max' => 255],*/
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
            'fullname' => Yii::t('forms', 'Full Name'),
            'image' => Yii::t('forms', 'Image'),
            'company' => Yii::t('forms', 'Company'),
            'position' => Yii::t('forms', 'Position'),
            'companyaddress' => Yii::t('forms', 'Company address'),
            'phonefax' => Yii::t('forms', 'Phone/Fax'),
            'mobilephone' => Yii::t('forms', 'Mobile phone'),
            'email' => Yii::t('forms', 'E-mail'),
            'usedphonenumber' => Yii::t('forms', 'Mobile phone used during the festival'),
            'visible' => Yii::t('forms', 'Visible'),
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
