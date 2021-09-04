<?php
namespace frontend\controllers;
use yii\web\Controller;

class DoktorController extends Controller {
    public function actionLogin() {
        return $this->render('login');
    }
    public function actionIndex() {
        $this->layout = 'doktor';
        return $this->render('index');
    }
    public function actionThird() {
          $this->layout = 'doktor';
        return $this->render('third');
    }
    public function actionProfile() {
        $this->layout = 'doktor';
        return $this->render('profile');
    }
    public function actionEdit() {
        $this->layout = 'doktor';
        return $this->render('edit');
    }
    public function actionEdit2() {
        $this->layout = 'doktor';
        return $this->render('edit2');
    }
}