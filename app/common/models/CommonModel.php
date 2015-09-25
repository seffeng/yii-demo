<?php
/**
 *  @file:   CommonModel.php
 *  @brief:  公共Model
**/

namespace common\models;

use yii\base\Model;

class CommonModel extends Model {

    /**
     *  @name:   getModel
     *  @brief:  测试方法
    **/
    public static function getModel() {
        return '<font color="red">start_common==========================<br />'. __METHOD__ .'end_common==========================</font><br />';
    }
}