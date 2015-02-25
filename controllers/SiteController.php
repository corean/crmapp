<?php
/**
 * Created by PhpStorm.
 * User: 윤수
 * Date: 2015-02-26
 * Time: 오전 1:10
 */

namespace app\controllers;

use \yii\web\controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return 'our CRM';
    }

}