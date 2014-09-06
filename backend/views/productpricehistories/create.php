<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Productpricehistories */

$this->title = 'Create Productpricehistories';
$this->params['breadcrumbs'][] = ['label' => 'Productpricehistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productpricehistories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
