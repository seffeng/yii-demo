<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('my_app', dirname(dirname(__DIR__)) .'/app');
Yii::setAlias('frontend', '@my_app/frontend');
Yii::setAlias('backend',  '@my_app/backend');
