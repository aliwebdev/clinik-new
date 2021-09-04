<?php
namespace frontend\controllers;
use yii\web\Controller;

class AdminController extends Controller {
    public function actionIndex() {
        $this->layout = 'admin';
        return $this->render('patient');
    }
    public function actionLogin() {
        return $this->render('login');
    }
    public function actionPatient()
    {
        $this->layout = 'admin';
        return $this->render('patient');
        
    }
    public function actionDoctor() {
        $this->layout = 'admin';
        return $this->render('doctor');
    }
    public function actionProfile() {
        $this->layout = 'admin';
        return $this->render('profile');
    }
    public function actionEdit() {
        $this->layout = 'admin';
        return $this->render('edit');
    }
    public function actionEdit2() {
        $this->layout = 'admin';
        return $this->render('edit2');
    }
    public function actionEvery() {
        $this->layout = 'admin';
        return $this->render('every');
    }
}