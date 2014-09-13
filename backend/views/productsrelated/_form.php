<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Products;

/* @var $this yii\web\View */
/* @var $model common\models\Productsrelated */
/* @var $form yii\bootstrap\ActiveForm */

$dataProducts = ArrayHelper::map(Products::find()->asArray()->all(),'ProductId','Name');
?>

<div class="productsrelated-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'ProductId')->dropDownList($dataProducts,['prompt'=>'Choose a Product']) ?>

    <?= $form->field($model, 'RelatedProductId1',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataProducts,['prompt'=>'Choose a Product']) ?>

    <?= $form->field($model, 'RelatedProductId2',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataProducts,['prompt'=>'Choose a Product']) ?>

    <?= $form->field($model, 'RelatedProductId3',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataProducts,['prompt'=>'Choose a Product']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
