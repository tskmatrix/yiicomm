<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchSuppliers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suppliers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'SupplierId') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'ShortName') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Website') ?>

    <?php // echo $form->field($model, 'LogoUrl') ?>

    <?php // echo $form->field($model, 'TaxOffice') ?>

    <?php // echo $form->field($model, 'TaxNumber') ?>

    <?php // echo $form->field($model, 'PrimaryPhone') ?>

    <?php // echo $form->field($model, 'PrimaryEmail') ?>

    <?php // echo $form->field($model, 'PrimaryPersonName') ?>

    <?php // echo $form->field($model, 'PrimaryPersonId') ?>

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
