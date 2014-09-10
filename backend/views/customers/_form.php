<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UserId')->textInput() ?>

    <?= $form->field($model, 'IsMallingActive')->checkbox() ?>

    <?= $form->field($model, 'VirtualMoney')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'AffiliateSlug')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'RefererCustomerId')->textInput() ?>

    <?= $form->field($model, 'LastInvoiceAddressId')->textInput() ?>

    <?= $form->field($model, 'LastShippingAddressId')->textInput() ?>

    <?= $form->field($model, 'LastCreditCardName')->textInput(['maxlength' => 50]) ?>

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
