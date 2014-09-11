<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Queuedemails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="queuedemails-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CustomerId')->textInput() ?>

    <?= $form->field($model, 'SendingTo')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ToName')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Priority')->textInput() ?>

    <?= $form->field($model, 'SendingFrom')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'FromName')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Cc')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Bcc')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Subject')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'SendTries')->textInput() ?>

    <?= $form->field($model, 'SentOn')->textInput() ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'LastUpdatedBy')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
