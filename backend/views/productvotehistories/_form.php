<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Products;
use common\models\Customers;

/* @var $this yii\web\View */
/* @var $model common\models\Productvotehistories */
/* @var $form yii\bootstrap\ActiveForm */

$dataCustomers = ArrayHelper::map(Customers::find()->asArray()->all(),'CustomerId','UserId');
$dataProducts = ArrayHelper::map(Products::find()->asArray()->all(),'ProductId','Name');
?>

<div class="productvotehistories-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'CustomerId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataCustomers,['prompt'=>'Choose a Customer']) ?>

    <?= $form->field($model, 'ProductId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataProducts,['prompt'=>'Choose a Product']) ?>

    <?= $form->field($model, 'Message',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'IsLiked',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->checkbox() ?>

    <?= $form->field($model, 'Comment',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
