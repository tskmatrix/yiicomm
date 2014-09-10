<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Campaignproducts */

$this->title = 'Update Campaignproducts: ' . ' ' . $model->CampaignProductId;
$this->params['breadcrumbs'][] = ['label' => 'Campaignproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CampaignProductId, 'url' => ['view', 'id' => $model->CampaignProductId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="campaignproducts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
