<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Giftcardhistories */

$this->title = 'Create Giftcardhistories';
$this->params['breadcrumbs'][] = ['label' => 'Giftcardhistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giftcardhistories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
