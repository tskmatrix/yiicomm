<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Productcategories */

$this->title = 'Update Productcategories: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Productcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ProductCategoryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productcategories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
