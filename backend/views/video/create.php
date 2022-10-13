<?php


use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/app.js"></script>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="upload-icon">
            <i class="fa-solid fa-upload"></i>
        </div>
    <br>

    <p class="m-0">Drag an drop a file you want to upload</p>
    <p class="text-muted">Your video will be private until you publish it</p>

    <?php $form= \yii\bootstrap5\ActiveForm::begin([
          'enableClientValidation' => false,
          'enableAjaxValidation' => true,
        'options'=>['enctype'=>'multipart/form-data']
    ])?>




    <button type="button" class="btn btn-primary btn-file">
    Select File
    <input type="file" id="videoFile" name="video">
    </button>

    <?php  \yii\bootstrap5\ActiveForm::end() ?>
</div>



</div>
