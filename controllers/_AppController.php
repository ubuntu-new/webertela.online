<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 5/31/2019
 * Time: 10:34 PM
 */

namespace app\controllers;
use yii\web\Controller;

class AppController extends Controller
{

    public function beforeAction($action) {

        $session = \Yii::$app->session;

        \Yii::$app->language = ($session->has('lang')) ? $session->get('lang') : 'en-US';

        return true;
    }


}