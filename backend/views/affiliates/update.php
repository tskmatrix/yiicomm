<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Affiliates */

$this->title = 'Update Affiliates: ' . ' ' . $model->AffiliateId;
$this->params['breadcrumbs'][] = ['label' => 'Affiliates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->AffiliateId, 'url' => ['view', 'id' => $model->AffiliateId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="affiliates-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
