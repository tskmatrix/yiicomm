<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Supplierspeople */

$this->title = $model->SuppliersPeopleId;
$this->params['breadcrumbs'][] = ['label' => 'Supplierspeoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplierspeople-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->SuppliersPeopleId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->SuppliersPeopleId], [
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
            'SuppliersPeopleId',
            'UserId',
            'SupplierId',
            'Department',
            'IsPrimary:boolean',
            'Comment:ntext',
            'created_by',
            'LastUpdatedBy',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
