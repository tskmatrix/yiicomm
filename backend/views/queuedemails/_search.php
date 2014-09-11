<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchQueuedemails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="queuedemails-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'QueuedEmailID') ?>

    <?= $form->field($model, 'CustomerId') ?>

    <?= $form->field($model, 'SendingTo') ?>

    <?= $form->field($model, 'ToName') ?>

    <?= $form->field($model, 'Priority') ?>

    <?php // echo $form->field($model, 'SendingFrom') ?>

    <?php // echo $form->field($model, 'FromName') ?>

    <?php // echo $form->field($model, 'Cc') ?>

    <?php // echo $form->field($model, 'Bcc') ?>

    <?php // echo $form->field($model, 'Subject') ?>

    <?php // echo $form->field($model, 'Body') ?>

    <?php // echo $form->field($model, 'SendTries') ?>

    <?php // echo $form->field($model, 'SentOn') ?>

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
