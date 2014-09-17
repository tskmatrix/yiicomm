<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Customers;
use common\models\Orders;
use common\models\Giftcards;

/* @var $this yii\web\View */
/* @var $model common\models\Giftcardhistories */
/* @var $form yii\widgets\ActiveForm */

$dataCustomers = ArrayHelper::map(Customers::find()->asArray()->all(),'CustomerId','UserId');
$dataOrders = ArrayHelper::map(Orders::find()->asArray()->all(),'OrderID', 'Name');
$dataGiftCards = ArrayHelper::map(Giftcards::find()->asArray()->all(),'GiftCardId','Name');
?>

<div class="giftcardhistories-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'GiftCardID',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataGiftCards,['prompt'=>'Choose']) ?>

    <?= $form->field($model, 'CustomerID',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataCustomers,['prompt'=>'Choose']) ?>

    <?= $form->field($model, 'OrderID',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataOrders,['prompt'=>'Choose']) ?>

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
