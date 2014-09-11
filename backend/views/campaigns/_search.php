<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchCampaigns */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaigns-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CampaignId') ?>

    <?= $form->field($model, 'CampaignTypeId') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'ShortDescription') ?>

    <?= $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'HtmlDescription') ?>

    <?php // echo $form->field($model, 'DiscountPercent') ?>

    <?php // echo $form->field($model, 'ImageUrl') ?>

    <?php // echo $form->field($model, 'OrderLimit') ?>

    <?php // echo $form->field($model, 'MaximumProductPurchaceLimit') ?>

    <?php // echo $form->field($model, 'MinimumProductPurchaceLimit') ?>

    <?php // echo $form->field($model, 'StartedOn') ?>

    <?php // echo $form->field($model, 'EndedOn') ?>

    <?php // echo $form->field($model, 'ShippingStartsOn') ?>

    <?php // echo $form->field($model, 'ShippingEndsOn') ?>

    <?php // echo $form->field($model, 'Comment') ?>

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
