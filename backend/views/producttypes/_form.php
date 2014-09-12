<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Productcategories;

/* @var $this yii\web\View */
/* @var $model common\models\Producttypes */
/* @var $form yii\widgets\ActiveForm */
$dataProductCategory = ArrayHelper::map(Productcategories::find()->asArray()->all(), 'ProductCategoryId','Name');
?>

<div class="producttypes-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'ProductCategoryId', [
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-3',
    ]])->dropDownList($dataProductCategory,
		['prompt'=>'----------Choose a Category----------']) ?>
    
    <?= $form->field($model, 'Name')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'Comment')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
