<?php

namespace zxf\web\demo\controllers;

use zxf\web\demo\components\Controller;

class SiteController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }
}