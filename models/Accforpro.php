<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accforpro".
 *
 * @property int $id
 * @property string $img
 * @property string $fullname
 * @property string $company
 * @property string $position
 * @property string $companyaddress
 * @property string $phonefax
 * @property string $mobilephone
 * @property string $email
 * @property string $usedphonenumber
 * @property string $visible
 */
class Accforpro extends \yii\db\ActiveRecord
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
        return 'accforpro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'company', 'position', 'companyaddress', 'phonefax', 'mobilephone', 'email'], 'required'],
            [['visible'], 'string'],
         /*   [['img', 'fullname', 'company', 'position', 'companyaddress', 'phonefax', 'mobilephone', 'email', 'usedphonenumber'], 'string', 'max' => 255],*/
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('forms', 'ID'),
            'image' => Yii::t('forms', 'Image'),
            'fullname' => Yii::t('forms', 'Full Name'),
            'company' => Yii::t('forms', 'Company'),
            'position' => Yii::t('forms', 'Position'),
            'companyaddress' => Yii::t('forms', 'Company address'),
            'phonefax' => Yii::t('forms', 'Phone/Fax'),
            'mobilephone' => Yii::t('forms', 'Mobile phone'),
            'email' => Yii::t('forms', 'E-mail'),
            'usedphonenumber' => Yii::t('forms', 'Mobile phone used during the festival'),
            'visible' => Yii::t('fomrs', 'Visible'),
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
