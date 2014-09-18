<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Customers;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\Customers */
/* @var $form yii\bootstrap\ActiveForm */

$dataCustomers = ArrayHelper::map(Customers::find()->asArray()->all(),'RefererCustomerId','Name');
$dataUser = ArrayHelper::map(User::find()->asArray()->all(),'id','username');
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'UserId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->dropDownList($dataUser,['prompt'=>'Choose a User']) ?>

    <?= $form->field($model, 'IsMallingActive',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->checkbox() ?>

    <?= $form->field($model, 'VirtualMoney',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'AffiliateSlug',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'RefererCustomerId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->dropDownList($dataUser,['prompt'=>'Choose a User']) ?>

    <?= $form->field($model, 'LastInvoiceAddressId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput() ?>

    <?= $form->field($model, 'LastShippingAddressId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput() ?>

    <?= $form->field($model, 'LastCreditCardName',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Comment',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
