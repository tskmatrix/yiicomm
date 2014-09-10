<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Campaigns */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaigns-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CampaignTypeId')->textInput() ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'ShortDescription')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'HtmlDescription')->textInput(['maxlength' => 150]) ?>

    <?= $form->field($model, 'DiscountPercent')->textInput() ?>

    <?= $form->field($model, 'ImageUrl')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'OrderLimit')->textInput() ?>

    <?= $form->field($model, 'MaximumProductPurchaceLimit')->textInput() ?>

    <?= $form->field($model, 'MinimumProductPurchaceLimit')->textInput() ?>

    <?= $form->field($model, 'StartedOn')->textInput() ?>

    <?= $form->field($model, 'EndedOn')->textInput() ?>

    <?= $form->field($model, 'ShippingStartsOn')->textInput() ?>

    <?= $form->field($model, 'ShippingEndsOn')->textInput() ?>

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
