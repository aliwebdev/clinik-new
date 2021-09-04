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
    public function actionHelp() {
        $this->layout = 'direktor';
        return $this->render('help');
    }
    public function actionAdoctor() {
        $this->layout = 'direktor';
        return $this->render('adoctor');
    }

    public function actionProfile() {
        $this->layout = 'direktor';
        return $this->render('profile');
    }
    public function actionEdit() {
        $this->layout = 'direktor';
        return $this->render('edit');
    }
    public function actionEdit2() {
        $this->layout = 'direktor';
        return $this->render('edit2');
    }
    public function actionStat() {
        $this->layout = 'direktor';
        return $this->render('stat');
    }
    public function actionEvery() {
        $this->layout = 'direktor';
        return $this->render('every');
    }
    public function actionEvery2() {
        $this->layout = 'direktor';
        return $this->render('every2');
    }
}