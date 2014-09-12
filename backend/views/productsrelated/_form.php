<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Productsrelated */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productsrelated-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductId')->textInput() ?>

    <?= $form->field($model, 'RelatedProductId1')->textInput() ?>

    <?= $form->field($model, 'RelatedProductId2')->textInput() ?>

    <?= $form->field($model, 'RelatedProductId3')->textInput() ?>

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