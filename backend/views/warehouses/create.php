<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Warehouses */

$this->title = 'Create Warehouses';
$this->params['breadcrumbs'][] = ['label' => 'Warehouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehouses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
