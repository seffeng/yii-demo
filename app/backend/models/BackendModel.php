<?php
/**
 *  @file:   BackendModel.php
 *  @brief:  测试Model
**/

namespace appdir\backend\models;

use yii\base\Model;
use common\models\CommonModel;

class BackendModel extends Model {

    /**
     *  @name:   getModel
     *  @brief:  测试方法
    **/
    public static function getModel() {
        return '<font color="black">start_back==========================<br />'. __METHOD__ ."<br />".CommonModel::getModel().'end_back==========================</font><br />';
    }
}