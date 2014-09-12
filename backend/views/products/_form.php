<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Suppliers;
use common\models\Brands;
use common\models\Producttypes;
use common\models\Productcategories;

/* @var $this yii\web\View */
/* @var $model common\models\Products */
/* @var $form yii\bootstrap\ActiveForm */

$dataProductCategory = ArrayHelper::map(Productcategories::find()->asArray()->all(), 'ProductCategoryId','Name');
$dataSuppliers = ArrayHelper::map(Suppliers::find()->asArray()->all(), 'SupplierId', 'Name');
$dataBrands = ArrayHelper::map(Brands::find()->asArray()->all(), 'BrandId', 'Name');
$dataProducttypes = ArrayHelper::map(Producttypes::find()->asArray()->all(), 'ProducttypeId', 'Name');
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'Name', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'ProductCategoryId', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->dropDownList($dataProductCategory,
		['prompt'=>'----------Choose a Category----------']) ?>
		
    <?= $form->field($model, 'SupplierId', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->dropDownList($dataSuppliers,['prompt'=>'----------Choose a Supplier----------']) ?>

    <?= $form->field($model, 'BrandId', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->dropDownList($dataBrands,['prompt'=>'----------Choose a Brand----------']) ?>

    <?= $form->field($model, 'ProductTypeId', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->dropDownList($dataProducttypes,['prompt'=>'----------Choose a Type----------']) ?>

    <?= $form->field($model, 'Gender', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->dropDownList($model->getGenderOptions(),['prompt'=>'Choose a Gender']) ?>

    <?= $form->field($model, 'SupplierDescription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ShortDescription')->textInput(['maxlength' => 2000]) ?>

    <?= $form->field($model, 'HtmlDescription')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'UrlName', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'DiscountPercent', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-1',
    ]])->textInput() ?>

    <?= $form->field($model, 'CommissionPercent', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-1',
    ]])->textInput() ?>

    <?= $form->field($model, 'TaxPercent', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-1',
    ]])->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'Price', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'PriceMarket', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'PriceSupplier', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'MaximumPurchaseCount', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput() ?>

    <?= $form->field($model, 'IsActive')->checkbox() ?>

    <?= $form->field($model, 'IsFeatured')->checkbox() ?>

    <?= $form->field($model, 'IsOnVote')->checkbox() ?>

    <?= $form->field($model, 'VoteCount',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput() ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <?php // echo $form->field($model, 'PublishedOn')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
