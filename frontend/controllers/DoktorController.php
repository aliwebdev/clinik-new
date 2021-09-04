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
    public function actionActive() {
        $this->layout = 'doktor';
        return $this->render('active');
    }
    public function actionHistory() {
        $this->layout = 'doktor';
        return $this->render('history');
    }
    public function actionHelp() {
        $this->layout = 'doktor';
        return $this->render('help');
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