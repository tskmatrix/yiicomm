<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Productoptiongroupmembers */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="productoptiongroupmembers-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'ProductOptionGroupId', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput() ?>

    <?= $form->field($model, 'Name', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'DisplayOrder', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput() ?>

    <?= $form->field($model, 'Comment', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
