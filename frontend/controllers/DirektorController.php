<?php
namespace frontend\controllers;
use yii\web\Controller;

class DirektorController extends Controller {
    public function actionIndex() {
        $this->layout = 'direktor';
        return $this->render('index');
    }
    public function actionLogin() {
        return $this->render('login');
    }
}