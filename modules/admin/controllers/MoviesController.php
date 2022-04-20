<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Categories;
use Yii;
use app\modules\admin\models\Movies;
use app\modules\admin\models\MoviesSearch;
use app\modules\admin\models\Director;
use app\modules\admin\models\Rewards;
/*use app\modules\admin\models\Categories;*/
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\modules\admin\models\Items;
use app\modules\admin\models\itemsSearch;
use yii\web\UploadedFile;

/**
 * MoviesController implements the CRUD actions for Movies model.
 */
class MoviesController extends Controller
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
     * Lists all Movies models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MoviesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Movies model.
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
     * Creates a new Movies model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Movies();
        $directors = Director::find()->select(['id', 'title'])->where(['visible'=>'1'])->all();
        $categories = Categories::find()->select(['id', 'title'])->where(['visible'=>'1'])->all();
        $rewards = Rewards::find()->select(['id', 'title'])->where(['visible'=>'1'])->all();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->director_array != '')
                $model->director =join(",",$model->director_array);
            if ($model->filtercategory_array != '')
                $model->filtercategory = $model->filtercategory_array;
            if ($model->bestff_array != '')
                $model->bestff =join(",",$model->bestff_array);
            if ($model->bestffn_array != '')
                $model->bestffn =join(",",$model->bestffn_array);
            if ( $model->save()) {
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
        }

        return $this->render('create', [
            'model' => $model,
            'directors'=>$directors,
            'categories'=>$categories,
            'rewards'=>$rewards
        ]);
    }

    /**
     * Updates an existing Movies model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $directors = Director::find()->select(['id', 'title'])->where(['visible'=>'1'])->all();
        $categories = Categories::find()->select(['id', 'title'])->where(['visible'=>'1'])->all();
        $rewards = Rewards::find()->select(['id', 'title'])->where(['visible'=>'1'])->all();


        if ($model->load(Yii::$app->request->post())) {
            if ($model->director_array != '')
                $model->director =join(",",$model->director_array);
            if ($model->filtercategory_array != '')
                $model->filtercategory = $model->filtercategory_array;
            if ($model->bestff_array != '')
                $model->bestff =join(",",$model->bestff_array);
            if ($model->bestffn_array != '')
                $model->bestffn =join(",",$model->bestffn_array);

            if ( $model->save()) {
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
        }
        return $this->render('update', [
            'model' => $model,
            'directors' => $directors,
            'categories'=>$categories,
            'rewards'=>$rewards
        ]);
    }

    /**
     * Deletes an existing Movies model.
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
     * Finds the Movies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Movies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Movies::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('items', 'The requested page does not exist.'));
    }
}
