<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Orderdetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orderdetails-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'OrderId')->textInput() ?>

    <?= $form->field($model, 'ProductId')->textInput() ?>

    <?= $form->field($model, 'Quantity')->textInput() ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'Amount')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'DiscountedAmount')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'TaxRate')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'TaxAmout')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'ShippedOn')->textInput() ?>

    <?= $form->field($model, 'pProductCategoryId')->textInput() ?>

    <?= $form->field($model, 'pSupplierId')->textInput() ?>

    <?= $form->field($model, 'pBrandId')->textInput() ?>

    <?= $form->field($model, 'pProductTypeId')->textInput() ?>

    <?= $form->field($model, 'pGender')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'pName')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'pSupplierDescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pDescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pShortDescription')->textInput(['maxlength' => 2000]) ?>

    <?= $form->field($model, 'pHtmlDescription')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'pUrlName')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'pMarketPrice')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'pPriceFromSupplier')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'pDiscountPercent')->textInput() ?>

    <?= $form->field($model, 'pCommissionPercent')->textInput() ?>

    <?= $form->field($model, 'pTaxPercent')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'pBarcode')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'pHasDifferentPriceForOptions')->checkbox() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'LastUpdatedBy')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
