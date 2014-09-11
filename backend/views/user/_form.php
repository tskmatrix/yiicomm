<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'UserTypeId')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Names')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'PreferredName')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Surname')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'Birthday')->textInput() ?>

    <?= $form->field($model, 'Website')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'FacebookId')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'TwitterId')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'IsLikedFanPage')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'PhotoUrl')->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'IsPersonal')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'IdentityNumber')->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'TaxNumber')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'TaxOffice')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'lastLogin')->textInput() ?>

    <?= $form->field($model, 'previousLogin')->textInput() ?>

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
