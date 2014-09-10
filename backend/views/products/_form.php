<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Suppliers;
use common\models\Brands;
use common\models\Producttypes;
use common\models\Productcategories;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductCategoryId')->dropDownList(Productcategories::find()->asArray()->all(),['ProductCategoryId' => 'Name']) ?>

    <?= $form->field($model, 'SupplierId')->dropDownList(Suppliers::find()->asArray()->all(), ['SupplierId' => 'Name']) ?>

    <?= $form->field($model, 'BrandId')->dropDownList(Brands::find()->asArray()->all(),['BrandId' => 'Name']) ?>

    <?= $form->field($model, 'ProductTypeId')->dropDownList(Producttypes::find()->asArray()->all(),['ProductTypeId' => 'Name']) ?>

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
