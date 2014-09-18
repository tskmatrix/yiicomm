<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;
use common\models\Suppliers;

$dataUser = ArrayHelper::map(User::find()->where('UserTypeId = 2')->asArray()->all(),'id','username');
$dataSuppliers = ArrayHelper::map(Suppliers::find()->asArray()->all(),'SupplierId','Name');

/* @var $this yii\web\View */
/* @var $model common\models\Supplierspeople */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="supplierspeople-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'UserId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataUser,['prompt'=>'Choose a User']) ?>

    <?= $form->field($model, 'SupplierId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataSuppliers, ['prompt'=>'Choose a Supplier']) ?>

    <?= $form->field($model, 'Department',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'IsPrimary',[
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
