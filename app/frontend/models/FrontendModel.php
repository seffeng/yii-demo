<?php
/**
 *  @file:   FrontendModel.php
 *  @brief:  测试Model
**/

namespace appdir\frontend\models;

use yii\base\Model;
use common\models\CommonModel;
use appdir\backend\models\BackendModel;

class FrontendModel extends Model {

    /**
     *  @name:   getModel
     *  @brief:  测试方法
    **/
    public static function getModel() {
        return '<font color="blue">start_front==========================<br />'. __METHOD__ ."<br />".CommonModel::getModel().BackendModel::getModel().'end_front==========================</font><br />';
    }
}