<?php
namespace admin\controllers;

use yii;
use yii\web\Controller;

class LoginController extends Controller
{
    public $layout = "login_main";

    public function actionLogin()
    {
        return $this->render('login');
    }
}