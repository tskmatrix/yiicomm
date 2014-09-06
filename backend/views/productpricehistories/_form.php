<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Productpricehistories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productpricehistories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductId')->textInput() ?>

    <?= $form->field($model, 'ProductOptionCombinationId')->textInput() ?>

    <?= $form->field($model, 'ProductOptionPriceId')->textInput() ?>

    <?= $form->field($model, 'OldPrice')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'NewPrice')->textInput(['maxlength' => 18]) ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'LastUpdatedBy')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
