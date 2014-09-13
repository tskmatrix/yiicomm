<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Customers;

$dataCustomers = ArrayHelper::map(Customers::find()->asArray()->all(),'CustomerId','UserId');

/* @var $this yii\web\View */
/* @var $model common\models\Queuedemails */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="queuedemails-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'CustomerId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataCustomers,['prompt'=>'Choose a Customer']) ?>

    <?= $form->field($model, 'SendingTo',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ToName',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Priority',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput() ?>

    <?= $form->field($model, 'SendingFrom',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'FromName',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Cc',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Bcc',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Subject',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Body',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'SendTries',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput() ?>

    <?= $form->field($model, 'SentOn',[
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
