<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchGiftcards */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giftcards-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'GiftCardId') ?>

    <?= $form->field($model, 'GiftCardTypeId') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'GiftCardCode') ?>

    <?php // echo $form->field($model, 'SenderCustomerId') ?>

    <?php // echo $form->field($model, 'SenderName') ?>

    <?php // echo $form->field($model, 'SenderPhone') ?>

    <?php // echo $form->field($model, 'SenderEmail') ?>

    <?php // echo $form->field($model, 'SenderMessage') ?>

    <?php // echo $form->field($model, 'RecipientCustomerId') ?>

    <?php // echo $form->field($model, 'RecipientName') ?>

    <?php // echo $form->field($model, 'RecipientPhone') ?>

    <?php // echo $form->field($model, 'RecipientEmail') ?>

    <?php // echo $form->field($model, 'StartedOn') ?>

    <?php // echo $form->field($model, 'EndedOn') ?>

    <?php // echo $form->field($model, 'IsActive')->checkbox() ?>

    <?php // echo $form->field($model, 'IsNotified')->checkbox() ?>

    <?php // echo $form->field($model, 'IsLimited')->checkbox() ?>

    <?php // echo $form->field($model, 'MinimumBasketAmount') ?>

    <?php // echo $form->field($model, 'MinimumBasketItemCount') ?>

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
