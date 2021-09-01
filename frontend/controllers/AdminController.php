<?php
namespace frontend\controllers;
use yii\web\Controller;

class AdminController extends Controller {
    public function actionIndex() {
        $this->layout = 'admin';
        return $this->render('index');
    }
    public function actionLogin() {
        return $this->render('login');
    }
}