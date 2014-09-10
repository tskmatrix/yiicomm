<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Campaignproducts */

$this->title = 'Create Campaignproducts';
$this->params['breadcrumbs'][] = ['label' => 'Campaignproducts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaignproducts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
