<?php
/**
 *  @file:   FrontendModel.php
 *  @brief:  测试Model
**/

namespace frontend\models;

use yii\base\Model;
use backend\models\BackendModel;

class FrontendModel extends Model {

    /**
     *  @name:   getModel
     *  @brief:  测试方法
    **/
    public static function getModel() {
        return '<font color="blue">start_front==========================<br />'. __METHOD__ ."<br />".BackendModel::getModel().'end_front==========================</font><br />';
    }
}