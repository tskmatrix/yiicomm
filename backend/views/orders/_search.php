<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchOrders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'OrderId') ?>

    <?= $form->field($model, 'CustomerId') ?>

    <?= $form->field($model, 'CampaignId') ?>

    <?= $form->field($model, 'PaymentId') ?>

    <?= $form->field($model, 'OrderStatusId') ?>

    <?php // echo $form->field($model, 'CustomerNote') ?>

    <?php // echo $form->field($model, 'InvoiceAddressText') ?>

    <?php // echo $form->field($model, 'InvoicePerson') ?>

    <?php // echo $form->field($model, 'InvoiceTaxNumber') ?>

    <?php // echo $form->field($model, 'InvoiceTaxOffice') ?>

    <?php // echo $form->field($model, 'InvoicedOn') ?>

    <?php // echo $form->field($model, 'PaidAmount') ?>

    <?php // echo $form->field($model, 'TotalDiscountAmount') ?>

    <?php // echo $form->field($model, 'TaxAmount') ?>

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
