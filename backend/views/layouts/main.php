<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Html;


AppAsset::register($this);
?>
<?php $this->beginPage() 
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
<?php $this->head() ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <style>html,
body{
    height: 100%;

}

aside .nav-pills .nav-link {
    border-radius: 0;
    color:#444444;

}


aside .nav-pills .nav-link:hover {
    background:rgba(0,0,0,0.05);
    
}
    

aside .nav-pills .nav-link.active{ 
    background:rgba(0,0,0,0.05);
    color:#b90000;
    border-left: 1px solid #b90000;
    
}
    
    </style>
    
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<div class="wrap  d-flex flex-column ">
   <?php echo $this ->render(view:'_header');?>   
</div>

<main role="main" class="d-flex  mw-25 "style="padding-top:10vh" >
<?php echo $this ->render(view:'_sidebar');?>

<div class="content-wrapper p-3">
        <?= Alert::widget() ?>   
        <?= $content ?>
    </div>

    
</main>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
