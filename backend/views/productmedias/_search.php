<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProductmediasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productmedias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ProductMediaId') ?>

    <?= $form->field($model, 'ProductId') ?>

    <?= $form->field($model, 'SmallImageUrl') ?>

    <?= $form->field($model, 'ImageUrl') ?>

    <?= $form->field($model, 'ZoomImageUrl') ?>

    <?php // echo $form->field($model, 'EmbedCode') ?>

    <?php // echo $form->field($model, 'HtmlAlt') ?>

    <?php // echo $form->field($model, 'HtmlTitle') ?>

    <?php // echo $form->field($model, 'FeaturedText') ?>

    <?php // echo $form->field($model, 'DisplayOrder') ?>

    <?php // echo $form->field($model, 'IsVideo')->checkbox() ?>

    <?php // echo $form->field($model, 'IsPrimary')->checkbox() ?>

    <?php // echo $form->field($model, 'IsActive')->checkbox() ?>

    <?php // echo $form->field($model, 'Comment') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'LastUpdatedBy') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
