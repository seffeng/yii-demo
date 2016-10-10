<?php

$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php echo ($this->title ? ($this->title .' - ') : '') . Yii::$app->name; ?></title>
        <?php $this->head(); ?>
    </head>

    <body>
    <?php $this->beginBody(); ?>
    <div>head</div>
    <div><?php echo $content; ?></div>
    <div>foot</div>
    <?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>