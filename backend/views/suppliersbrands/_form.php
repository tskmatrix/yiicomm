<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Suppliers;

$data = ArrayHelper::map(Suppliers::find()->asArray()->all(),'SupplierId', 'Name');

/* @var $this yii\web\View */
/* @var $model common\models\Suppliersbrands */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="suppliersbrands-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'BrandId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->textInput() ?>

    <?= $form->field($model, 'SupplierId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList() ?>

    <?= $form->field($model, 'Comment',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
