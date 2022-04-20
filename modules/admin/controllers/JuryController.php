<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Jury;
use app\modules\admin\models\JurySearch;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * JuryController implements the CRUD actions for Jury model.
 */
class JuryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ]
                ]
            ],
        ];
    }

    /**
     * Lists all Jury models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JurySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jury model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Jury model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Jury();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->removeImage($model->getImage());
            $model->image = UploadedFile::getInstance($model , 'image');
            if($model->image){
                $model->upload();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jury model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {


            $image =  UploadedFile::getInstance($model , 'image');
            $model->image =$image;
            if(!empty($image) && $image->size !== 0) {
                $model->removeImage( $model->getImage());
            }

            if($model->image){
                $model->upload();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jury model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
//        $this->findModel($id)->delete();
        $model = $this->findModel($id);
        $model->removeImage( $model->getImage());
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jury model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Jury the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Jury::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('jury', 'The requested page does not exist.'));
    }
}
