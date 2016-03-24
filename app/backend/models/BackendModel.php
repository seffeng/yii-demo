<?php
/**
 *  @file:   BackendModel.php
 *  @brief:  测试Model
**/

namespace backend\models;

use yii\base\Model;

class BackendModel extends Model {

    /**
     *  @name:   getModel
     *  @brief:  测试方法
    **/
    public static function getModel() {
        return '<font color="black">start_back==========================<br />'. __METHOD__ ."<br />".'end_back==========================</font><br />';
    }
}