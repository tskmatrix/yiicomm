<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\stockunits */

$this->title = 'Create Stockunits';
$this->params['breadcrumbs'][] = ['label' => 'Stockunits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stockunits-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
