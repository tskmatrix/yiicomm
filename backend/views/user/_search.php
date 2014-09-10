<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'UserTypeId') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_hash') ?>

    <?php // echo $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'Names') ?>

    <?php // echo $form->field($model, 'PreferredName') ?>

    <?php // echo $form->field($model, 'Surname') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <?php // echo $form->field($model, 'Birthday') ?>

    <?php // echo $form->field($model, 'Website') ?>

    <?php // echo $form->field($model, 'FacebookId') ?>

    <?php // echo $form->field($model, 'TwitterId') ?>

    <?php // echo $form->field($model, 'IsLikedFanPage') ?>

    <?php // echo $form->field($model, 'PhotoUrl') ?>

    <?php // echo $form->field($model, 'IsPersonal') ?>

    <?php // echo $form->field($model, 'IdentityNumber') ?>

    <?php // echo $form->field($model, 'TaxNumber') ?>

    <?php // echo $form->field($model, 'TaxOffice') ?>

    <?php // echo $form->field($model, 'Comment') ?>

    <?php // echo $form->field($model, 'role') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'lastLogin') ?>

    <?php // echo $form->field($model, 'previousLogin') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'LastUpdatedBy') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
