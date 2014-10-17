<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Shippingstatuses */

$this->title = 'Create Shippingstatuses';
$this->params['breadcrumbs'][] = ['label' => 'Shippingstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shippingstatuses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
