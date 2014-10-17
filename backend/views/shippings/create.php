<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Shippings */

$this->title = 'Create Shippings';
$this->params['breadcrumbs'][] = ['label' => 'Shippings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shippings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
