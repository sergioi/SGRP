<?php
namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class DescargaController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}



?>