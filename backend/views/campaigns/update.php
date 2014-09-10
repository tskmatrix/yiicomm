<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Campaigns */

$this->title = 'Update Campaigns: ' . ' ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Campaigns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->CampaignId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campaigns-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
