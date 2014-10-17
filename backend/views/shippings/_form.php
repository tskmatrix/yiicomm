<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Shippings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shippings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'OrderId')->textInput() ?>

    <?= $form->field($model, 'OrderDetailId')->textInput() ?>

    <?= $form->field($model, 'ShippingAddressText')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ShippingPerson')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'ShippingNumber')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'ShippingTypeId')->textInput() ?>

    <?= $form->field($model, 'ShippingStatusId')->textInput() ?>

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
