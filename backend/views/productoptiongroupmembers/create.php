<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Productoptiongroupmembers */

$this->title = 'Create Productoptiongroupmembers';
$this->params['breadcrumbs'][] = ['label' => 'Productoptiongroupmembers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productoptiongroupmembers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
