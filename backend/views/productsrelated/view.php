<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Productsrelated */

$this->title = $model->ProductsRelatedId;
$this->params['breadcrumbs'][] = ['label' => 'Productsrelateds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productsrelated-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ProductsRelatedId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ProductsRelatedId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ProductsRelatedId',
            'ProductId',
            'RelatedProductId1',
            'RelatedProductId2',
            'RelatedProductId3',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
