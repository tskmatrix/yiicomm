<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use tii\helpers\ArrayHelper;
use common\models\Customers;
use common\models\Orders;
use common\models\Giftcards;

/* @var $this yii\web\View */
/* @var $model common\models\Giftcardhistories */
/* @var $form yii\widgets\ActiveForm */

$dataCustomers = ArrayHelper::map();
$dataOrders = ArrayHelper::map();
$dataGiftCards = ArrayHelper::map();
?>

<div class="giftcardhistories-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'GiftCardID',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataGiftCards,['GiftCardID'=>'Name']) ?>

    <?= $form->field($model, 'CustomerID',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataCustomers,['CustomerID'=>'']) ?>

    <?= $form->field($model, 'OrderID',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataOrders,['OrderId'=>'']) ?>

    <?= $form->field($model, 'BasketAmount',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'GiftCardAmount',[
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
