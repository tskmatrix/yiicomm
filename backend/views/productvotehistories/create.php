<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Productvotehistories */

$this->title = 'Create Productvotehistories';
$this->params['breadcrumbs'][] = ['label' => 'Productvotehistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productvotehistories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
