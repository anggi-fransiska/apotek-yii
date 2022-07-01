<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @author Anggi */
/* @var $this yii\web\View */
/* @var $model backend\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= Html::img('../../../frontend/web/uploads/' . $model->img_url, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3 mt-5', 'width' => '300px']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'dosis')->textInput() ?>

    <?= $form->field($model, 'kegunaan')->textInput() ?>

    <?= $form->field($model, 'file_upload')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
