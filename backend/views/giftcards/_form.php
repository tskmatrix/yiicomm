<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Giftcardtypes;

$dataGiftCardType = ArrayHelper::map(Giftcardtypes::find()->asArray()->all(),'GiftCardTypeId','Name');

/* @var $this yii\web\View */
/* @var $model common\models\Giftcards */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="giftcards-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'GiftCardTypeId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->dropDownList($dataGiftCardType,['prompt'=>'Choose a Type']) ?>

    <?= $form->field($model, 'Name',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Description',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'GiftCardCode',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'SenderCustomerId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'SenderName',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'SenderPhone',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'SenderEmail',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'SenderMessage',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'RecipientCustomerId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'RecipientName',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'RecipientPhone',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'RecipientEmail',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'StartedOn',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'EndedOn',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'IsActive',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->checkbox() ?>

    <?= $form->field($model, 'IsNotified',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->checkbox() ?>

    <?= $form->field($model, 'IsLimited',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->checkbox() ?>

    <?= $form->field($model, 'MinimumBasketAmount',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'MinimumBasketItemCount',[
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
