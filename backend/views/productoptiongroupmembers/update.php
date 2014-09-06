<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Productoptiongroupmembers */

$this->title = 'Update Productoptiongroupmembers: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Productoptiongroupmembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ProductOptionGroupMemberId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productoptiongroupmembers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
