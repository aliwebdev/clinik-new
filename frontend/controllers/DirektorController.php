<?php
namespace frontend\controllers;
use yii\web\Controller;

class DirektorController extends Controller {
    public function actionLogin() {
        return $this->render('login');
    }
    public function actionIndex() {
        $this->layout = 'direktor';
        return $this->render('index');
    }
    public function actionPatient() {
        $this->layout = 'direktor';
        return $this->render('patient');
    }
    public function actionDoctor() {
        $this->layout = 'direktor';
        return $this->render('doctor');
    }
    public function actionAdmin() {
        $this->layout = 'direktor';
        return $this->render('admin');
    }
}