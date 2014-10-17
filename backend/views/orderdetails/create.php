<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Orderdetails */

$this->title = 'Create Orderdetails';
$this->params['breadcrumbs'][] = ['label' => 'Orderdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderdetails-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
