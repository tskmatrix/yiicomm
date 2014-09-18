<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\stockunits */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="stockunits-form">

    <?php $form = ActiveForm::begin(['layouy'=>'horizontal']); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
