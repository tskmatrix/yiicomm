<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Campaigntypes;

/* @var $this yii\web\View */
/* @var $model common\models\Campaigns */
/* @var $form yii\widgets\ActiveForm */

$data = ArrayHelper::map(Campaigntypes::find()->asArray()->all(),'CampaignTypeId','Name');
?>

<div class="campaigns-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CampaignTypeId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($data,['prompt'=>'Choose A Type']) ?>

    <?= $form->field($model, 'Name',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'ShortDescription',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Description',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'HtmlDescription',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'DiscountPercent',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'ImageUrl',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'OrderLimit',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput() ?>

    <?= $form->field($model, 'MaximumProductPurchaceLimit',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput() ?>

    <?= $form->field($model, 'MinimumProductPurchaceLimit',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->textInput() ?>

    <?= $form->field($model, 'StartedOn',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'EndedOn',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'ShippingStartsOn',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'ShippingEndsOn',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'Comment',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
