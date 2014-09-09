<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductCategoryId')->textInput() ?>

    <?= $form->field($model, 'SupplierId')->textInput() ?>

    <?= $form->field($model, 'BrandId')->textInput() ?>

    <?= $form->field($model, 'ProductTypeId')->textInput() ?>

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'SupplierDescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ShortDescription')->textInput(['maxlength' => 2000]) ?>

    <?= $form->field($model, 'HtmlDescription')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'UrlName')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'DiscountPercent')->textInput() ?>

    <?= $form->field($model, 'CommissionPercent')->textInput() ?>

    <?= $form->field($model, 'TaxPercent')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'Price')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'PriceMarket')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'PriceSupplier')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'MaximumPurchaseCount')->textInput() ?>

    <?= $form->field($model, 'IsActive')->checkbox() ?>

    <?= $form->field($model, 'IsFeatured')->checkbox() ?>

    <?= $form->field($model, 'IsOnVote')->checkbox() ?>

    <?= $form->field($model, 'VoteCount')->textInput() ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'LastUpdatedBy')->textInput() ?>

    <?= $form->field($model, 'PublishedOn')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
