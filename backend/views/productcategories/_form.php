<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Productcategories */
/* @var $form yii\widgets\ActiveForm */

$dataParentProductCategory = ArrayHelper::map($model::find()->asArray()->all(), 'ProductCategoryId','Name');
?>

<div class="productcategories-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'ParentProductCategoryId', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->dropDownList($dataParentProductCategory,['prompt'=>'--Choose a Category--']) ?>

    <?= $form->field($model, 'Name', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'Description', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ShortDescription', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 2000]) ?>

    <?= $form->field($model, 'HtmlDecription', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'AvatarUrl', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'IconUrl', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Comment', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
