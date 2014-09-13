<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Brands */
/* @var $form yii\bootstrap\ActiveForm */


?>

<div class="brands-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'Name',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Description',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Website',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'LogoUrl',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'IsLogoVisible')->checkbox() ?>

    <?= $form->field($model, 'Comment',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
