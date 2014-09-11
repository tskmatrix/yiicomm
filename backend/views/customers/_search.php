<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchCustomers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CustomerId') ?>

    <?= $form->field($model, 'UserId') ?>

    <?= $form->field($model, 'IsMallingActive')->checkbox() ?>

    <?= $form->field($model, 'VirtualMoney') ?>

    <?= $form->field($model, 'AffiliateSlug') ?>

    <?php // echo $form->field($model, 'RefererCustomerId') ?>

    <?php // echo $form->field($model, 'LastInvoiceAddressId') ?>

    <?php // echo $form->field($model, 'LastShippingAddressId') ?>

    <?php // echo $form->field($model, 'LastCreditCardName') ?>

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
