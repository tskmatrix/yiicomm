<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Productcategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productcategories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ParentProductCategoryId')->textInput() ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ShortDescription')->textInput(['maxlength' => 2000]) ?>

    <?= $form->field($model, 'HtmlDecription')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'AvatarUrl')->textInput(['maxlength' => 500]) ?>

    <?= $form->field($model, 'IconUrl')->textInput(['maxlength' => 500]) ?>

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
