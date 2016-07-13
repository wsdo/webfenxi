<?php

namespace app\modules\v1\controllers;

// use app\services\V8jsService;
use yii\rest\ActiveController;

class TestController extends \yii\web\Controller
{
    private $v8 = false;

    public function actionIndex()
    {
        phpinfo();
        // $this->v8 = new V8Js();
        // $this->v8->executeString($js);
        // $v8 = new V8jsService();
        // This prints "no"
        $this->v8->executeString('print( "bar" in PHP.foo ? "yes" : "no" );');

        // return $this->render('index');
    }
}
