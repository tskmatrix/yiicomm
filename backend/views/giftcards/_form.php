<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Giftcards */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="giftcards-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'GiftCardTypeId')->textInput() ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'GiftCardCode')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'SenderCustomerId')->textInput() ?>

    <?= $form->field($model, 'SenderName')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'SenderPhone')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'SenderEmail')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'SenderMessage')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'RecipientCustomerId')->textInput() ?>

    <?= $form->field($model, 'RecipientName')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'RecipientPhone')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'RecipientEmail')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'StartedOn')->textInput() ?>

    <?= $form->field($model, 'EndedOn')->textInput() ?>

    <?= $form->field($model, 'IsActive')->checkbox() ?>

    <?= $form->field($model, 'IsNotified')->checkbox() ?>

    <?= $form->field($model, 'IsLimited')->checkbox() ?>

    <?= $form->field($model, 'MinimumBasketAmount')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'MinimumBasketItemCount')->textInput() ?>

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
