<?php
/**
 * APP控制器
 */

namespace zxf\web\demo\components;

use zxf\components\WebController;

class Controller extends WebController {

    /**
     * @var boolean whether to enable CSRF validation for the actions in this controller.
     * CSRF validation is enabled only when both this property and [[\yii\web\Request::enableCsrfValidation]] are true.
     */
    public $enableCsrfValidation = FALSE;
}