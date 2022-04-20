<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Director;
use Yii;
use app\modules\admin\models\Items;
use app\modules\admin\models\itemsSearch;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ItemsController implements the CRUD actions for Items model.
 */
class ItemsController extends Controller
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
     * Lists all Items models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new itemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Items model.
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
     * Creates a new Items model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Items();
        $directors = Director::find()->select(['id', 'title'])->where(['visible'=>'1'])->all();

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
            'directors'=>$directors
        ]);
    }

    /**
     * Updates an existing Items model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $directors = Director::find()->select(['id', 'title'])->where(['visible'=>'1'])->all();

        if ($model->load(Yii::$app->request->post())) {
            $model->director =join(",",$model->director_array);
            if ( $model->save()) {



            $model->image = UploadedFile::getInstance($model , 'image');
            $model->removeImage( $model->getImage());
            if($model->image){
                $model->upload();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }
        }
        return $this->render('update', [
            'model' => $model,
            'directors' => $directors,
        ]);
    }

    /**
     * Deletes an existing Items model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->removeImage( $model->getImage());
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Items model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Items the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Items::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('items', 'The requested page does not exist.'));
    }
}
