<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Productoptiongroups */

$this->title = 'Create Productoptiongroups';
$this->params['breadcrumbs'][] = ['label' => 'Productoptiongroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productoptiongroups-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
