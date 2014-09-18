<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use kartik\datecontrol\DateControl;
use common\models\Usertypes;

$dataUserTypes = ArrayHelper::map(Usertypes::find()->asArray()->all(), 'UserTypeId', 'Name');



/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="user-form">

    <?php // echo '<pre>'; 
  //  print_r(Yii::$app->params['dateControlDisplay']); 
  //  print_r(Yii::$app->params['dateControlSave']); 
  //  print_r(Yii::$app->formatter);
  //  echo '</pre>';
    $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'UserTypeId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->dropDownList($dataUserTypes,['prompt'=>'Choose a User Type']) ?>

    <?= $form->field($model, 'username',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'auth_key',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'password_hash',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'password_reset_token',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Names',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'PreferredName',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Surname',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Gender',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-2',
    ]])->dropDownList($model->getGenderOptions(),['prompt'=>'Choose a Gender']) ?>

    <?= $form->field($model, 'Birthday',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->widget(DateControl::classname(), [
			'type'=>DateControl::FORMAT_DATE,
    		'ajaxConversion' => true,
		]) ?>

    <?= $form->field($model, 'Website',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'FacebookId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'TwitterId',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'IsLikedFanPage')->checkbox() ?>

    <?= $form->field($model, 'PhotoUrl',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 1000]) ?>

    <?= $form->field($model, 'IsPersonal')->checkbox() ?>

    <?= $form->field($model, 'IdentityNumber',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 11]) ?>

    <?= $form->field($model, 'TaxNumber',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'TaxOffice',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'Comment',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'role',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput() ?>

    <?= $form->field($model, 'status',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput() ?>

    <?= $form->field($model, 'lastLogin',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->widget(DateControl::classname(), [
		'type'=>DateControl::FORMAT_DATE,
		'ajaxConversion' => true,
	])?>

    <?= $form->field($model, 'previousLogin',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->widget(DateControl::classname(), [
		'type' => DateControl::FORMAT_DATE,
		'ajaxConversion' => true,
		]) ?>

    <?= $form->field($model, 'deleted_at',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->widget(DateControl::classname(), [
		'type'=>DateControl::FORMAT_DATE,
		'ajaxConversion' => true,
	]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
