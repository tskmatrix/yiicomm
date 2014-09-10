<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Suppliers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="suppliers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'ShortName')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Website')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'LogoUrl')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'TaxOffice')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'TaxNumber')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'PrimaryPhone')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'PrimaryEmail')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'PrimaryPersonName')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'PrimaryPersonId')->textInput() ?>

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
