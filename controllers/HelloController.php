<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\forms\LoginForm;
use app\models\forms\PasswordResetRequestForm;
use app\models\forms\ResetPasswordForm;

class SiteController extends Controller
{
	public function actionIndex()
	{
		echo "string";
	}
}