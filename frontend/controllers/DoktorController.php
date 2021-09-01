<?php
namespace frontend\controllers;
use yii\web\Controller;

class DoktorController extends Controller {
    public function actionIndex() {
        $this->layout = 'doktor';
        return $this->render('index');
    }
    public function actionLogin() {
        return $this->render('login');
    }
}