<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 9/18/2019
 * Time: 13:07
 */

namespace app\modules\admin\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;


class AppAdminController extends Controller
{
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
//                        'allow' => true,
//                        'actions' => ['login', 'signup'],
//                        'roles' => ['@'],
                    ],
//                    [
//                        'allow' => true,
//                        'actions' => ['logout'],
//                        'roles' => ['@'],
//                    ],
                ],
            ],
        ];
    }
}