<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchOrderdetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orderdetails-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'OrderDetailId') ?>

    <?= $form->field($model, 'OrderId') ?>

    <?= $form->field($model, 'ProductId') ?>

    <?= $form->field($model, 'Quantity') ?>

    <?= $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'Amount') ?>

    <?php // echo $form->field($model, 'DiscountedAmount') ?>

    <?php // echo $form->field($model, 'TaxRate') ?>

    <?php // echo $form->field($model, 'TaxAmout') ?>

    <?php // echo $form->field($model, 'ShippedOn') ?>

    <?php // echo $form->field($model, 'pProductCategoryId') ?>

    <?php // echo $form->field($model, 'pSupplierId') ?>

    <?php // echo $form->field($model, 'pBrandId') ?>

    <?php // echo $form->field($model, 'pProductTypeId') ?>

    <?php // echo $form->field($model, 'pGender') ?>

    <?php // echo $form->field($model, 'pName') ?>

    <?php // echo $form->field($model, 'pSupplierDescription') ?>

    <?php // echo $form->field($model, 'pDescription') ?>

    <?php // echo $form->field($model, 'pShortDescription') ?>

    <?php // echo $form->field($model, 'pHtmlDescription') ?>

    <?php // echo $form->field($model, 'pUrlName') ?>

    <?php // echo $form->field($model, 'pMarketPrice') ?>

    <?php // echo $form->field($model, 'pPriceFromSupplier') ?>

    <?php // echo $form->field($model, 'pDiscountPercent') ?>

    <?php // echo $form->field($model, 'pCommissionPercent') ?>

    <?php // echo $form->field($model, 'pTaxPercent') ?>

    <?php // echo $form->field($model, 'pBarcode') ?>

    <?php // echo $form->field($model, 'pHasDifferentPriceForOptions')->checkbox() ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <?php // echo $form->field($model, 'Comment') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'LastUpdatedBy') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
