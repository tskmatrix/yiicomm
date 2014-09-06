<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Productmedias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productmedias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProductId')->textInput() ?>

    <?= $form->field($model, 'SmallImageUrl')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'ImageUrl')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'ZoomImageUrl')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'EmbedCode')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'HtmlAlt')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'HtmlTitle')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'FeaturedText')->textInput(['maxlength' => 2000]) ?>

    <?= $form->field($model, 'DisplayOrder')->textInput() ?>

    <?= $form->field($model, 'IsVideo')->checkbox() ?>

    <?= $form->field($model, 'IsPrimary')->checkbox() ?>

    <?= $form->field($model, 'IsActive')->checkbox() ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'LastUpdatedBy')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
