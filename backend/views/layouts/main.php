<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Html;


AppAsset::register($this);
$this->beginContent(viewFile:'@backend/views/layouts/base.php');
?>

<div class="wrap  d-flex flex-column ">
   <?php echo $this ->render(view:'_header');?>   
</div>

<main role="main" class="d-flex  mw-25  "style="padding-top:6vh" >
<?php  echo $this ->render(view:'_sidebar');?>

<div class="content-wrapper p-3">
        <?= Alert::widget() ?>   
        <?= $content ?>
    </div>

    
</main>

<?php $this->endContent() ?>


