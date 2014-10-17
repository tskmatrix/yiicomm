<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Orderstatuses */

$this->title = 'Create Orderstatuses';
$this->params['breadcrumbs'][] = ['label' => 'Orderstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderstatuses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
