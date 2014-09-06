<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchProductCategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productcategories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ProductCategoryId') ?>

    <?= $form->field($model, 'ParentProductCategoryId') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'ShortDescription') ?>

    <?php // echo $form->field($model, 'HtmlDecription') ?>

    <?php // echo $form->field($model, 'AvatarUrl') ?>

    <?php // echo $form->field($model, 'IconUrl') ?>

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
