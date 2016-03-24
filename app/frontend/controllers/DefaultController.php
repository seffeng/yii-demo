<?php
/**
 *  @file:   DefaultController.php
 *  @brief:  默认控制器
**/

namespace frontend\controllers;

use frontend\components\WebController;
use frontend\models\FrontendModel;
use backend\models\BackendModel;

class DefaultController extends WebController {

    /**
     *  @name:   actions
     *  @brief:  action组合
    **/
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     *  @name:   actionIndex
     *  @brief:  默认action
    **/
    public function actionIndex() {
        echo APP_NAME. '_index<br />';
        echo FrontendModel::getModel();
        echo BackendModel::getModel();
        echo APP_NAME. '_end<br />';
    }

    /**
     *  @name:   actionView
     *  @brief:  测试action
     *  @param:  integer $id 测试参数
    **/
    public function actionTest($id=0) {
        var_dump('frontend_actionTest_id: '.$id);
    }
}