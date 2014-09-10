<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchGiftcardhistories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giftcardhistories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'GiftCardHistoryId') ?>

    <?= $form->field($model, 'GiftCardID') ?>

    <?= $form->field($model, 'CustomerID') ?>

    <?= $form->field($model, 'OrderID') ?>

    <?= $form->field($model, 'BasketAmount') ?>

    <?php // echo $form->field($model, 'GiftCardAmount') ?>

    <?php // echo $form->field($model, 'Comment') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'LastUpdatedBy') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
