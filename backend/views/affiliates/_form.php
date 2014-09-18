<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Customers;

$dataCustomer = ArrayHelper::map(Customers::find()->asArray()->all(),'CustomerId','Name');

/* @var $this yii\web\View */
/* @var $model common\models\Affiliates */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="affiliates-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'CustomerId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataCustomer,['prompt'=>'Choose a Customer']) ?>

    <?= $form->field($model, 'ReferedCustomerId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataCustomer,['prompt'=>'Choose a Customer']) ?>

    <?php // echo $form->field($model, 'ActivatedOn')->textInput() ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
