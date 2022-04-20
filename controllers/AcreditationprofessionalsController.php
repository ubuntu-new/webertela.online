<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 10/17/2019
 * Time: 17:09
 */

namespace app\controllers;
use Yii;
use app\models\Accforpro;
use app\models\Accformediatxt;
use yii\web\UploadedFile;
class AcreditationprofessionalsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Accforpro();
//        $mediatxt = Accformediatxt::find()->all();
        $sql = "SELECT * FROM accformediatxt WHERE id='2'";

        $mediatxt = \Yii::$app->db->createCommand($sql)->queryAll(\PDO::FETCH_ASSOC);




        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->validate()) {
                $model->removeImage($model->getImage());
                $model->image = UploadedFile::getInstance($model, 'image');
                if ($model->image) {
                    $model->upload();
                }
                Yii::$app->session->setFlash('success', "Your message has been submitted");
                Yii::$app->session->setFlash('success_ge', "თქვენი ფორმა გაიგზავნა.");
            }
            return  $this->refresh();
        }
        else if ($model->load(Yii::$app->request->post()) && !$model->save())
        {
            if ($model->validate()) {
                Yii::$app->session->setFlash('error', "Your message has not been submitted");
                Yii::$app->session->setFlash('error_ge', "თქვენი ფორმა არ გაიგზავნა.");
            }
            return  $this->refresh();
        }


        return $this->render('index', [
            'model' => $model,
            'mediatxt' => $mediatxt,
            'id' => $model->id
        ]);
    }
}