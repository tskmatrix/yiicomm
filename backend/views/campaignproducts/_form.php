<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Products;
use common\models\Stockunits;
use common\models\Campaigns;

/* @var $this yii\web\View */
/* @var $model common\models\Campaignproducts */
/* @var $form yii\widgets\ActiveForm */

$dataCampaigns = ArrayHelper::map(Campaigns::find()->asArray()->all(), 'CampaignId','Name');
$dataProducts = ArrayHelper::map(Products::find()->asArray()->all(),'ProductId','Name');
?>

<div class="campaignproducts-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'CampaignId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->dropDownList($dataCampaigns,['prompt' => 'Choose a Campaign']) ?>

    <?= $form->field($model, 'ProductId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataProducts, ['prompt' => 'Choose a Product']) ?>

    <?= $form->field($model, 'Price',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'Stock',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'StockUnitId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput() ?>

    <?= $form->field($model, 'Comment',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
