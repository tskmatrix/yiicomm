<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Products;

/* @var $this yii\web\View */
/* @var $model common\models\Productmedias */
/* @var $form yii\widgets\ActiveForm */

$dataProducts = ArrayHelper::map(Products::find()->asArray()->all(), 'ProductId', 'Name');
?>

<div class="productmedias-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'ProductId', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataProducts,['prompt'=>'--Choose a Product--']) ?>

    <?= $form->field($model, 'SmallImageUrl', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'ImageUrl', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'ZoomImageUrl', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'EmbedCode', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'HtmlAlt', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'HtmlTitle', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'FeaturedText', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 2000]) ?>

    <?= $form->field($model, 'DisplayOrder', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-1',
    ]])->textInput() ?>

    <?= $form->field($model, 'IsVideo', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->checkbox() ?>

    <?= $form->field($model, 'IsPrimary', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->checkbox() ?>

    <?= $form->field($model, 'IsActive', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->checkbox() ?>

    <?= $form->field($model, 'Comment', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
