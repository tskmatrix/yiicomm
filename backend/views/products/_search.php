<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchProducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ProductId') ?>

    <?= $form->field($model, 'ProductCategoryId') ?>

    <?= $form->field($model, 'SupplierId') ?>

    <?= $form->field($model, 'BrandId') ?>

    <?= $form->field($model, 'ProductTypeId') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <?php // echo $form->field($model, 'Name') ?>

    <?php // echo $form->field($model, 'SupplierDescription') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'ShortDescription') ?>

    <?php // echo $form->field($model, 'HtmlDescription') ?>

    <?php // echo $form->field($model, 'UrlName') ?>

    <?php // echo $form->field($model, 'DiscountPercent') ?>

    <?php // echo $form->field($model, 'CommissionPercent') ?>

    <?php // echo $form->field($model, 'TaxPercent') ?>

    <?php // echo $form->field($model, 'Price') ?>

    <?php // echo $form->field($model, 'PriceMarket') ?>

    <?php // echo $form->field($model, 'PriceSupplier') ?>

    <?php // echo $form->field($model, 'MaximumPurchaseCount') ?>

    <?php // echo $form->field($model, 'IsActive')->checkbox() ?>

    <?php // echo $form->field($model, 'IsFeatured')->checkbox() ?>

    <?php // echo $form->field($model, 'IsOnVote')->checkbox() ?>

    <?php // echo $form->field($model, 'VoteCount') ?>

    <?php // echo $form->field($model, 'Comment') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'LastUpdatedBy') ?>

    <?php // echo $form->field($model, 'PublishedOn') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
