<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Brands;
use common\models\Suppliers;

$dataBrands = ArrayHelper::map(Brands::find()->asArray()->all(),'BrandId', 'Name');
$dataSuppliers = ArrayHelper::map(Suppliers::find()->asArray()->all(),'SupplierId', 'Name');

/* @var $this yii\web\View */
/* @var $model common\models\Suppliersbrands */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="suppliersbrands-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'BrandId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->dropDownList($dataBrands,['prompt'=>'Choose']) ?>

    <?= $form->field($model, 'SupplierId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataSuppliers,['prompt'=>'Choose']) ?>

    <?= $form->field($model, 'Comment',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
