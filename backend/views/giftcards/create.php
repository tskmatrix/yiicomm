<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Giftcards */

$this->title = 'Create Giftcards';
$this->params['breadcrumbs'][] = ['label' => 'Giftcards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giftcards-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
