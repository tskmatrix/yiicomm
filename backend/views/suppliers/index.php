<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchSuppliers */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppliers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suppliers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Suppliers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'SupplierId',
            'Name',
            'ShortName',
            'Description:ntext',
            'Website',
            // 'LogoUrl:url',
            // 'TaxOffice',
            // 'TaxNumber',
            // 'PrimaryPhone',
            // 'PrimaryEmail:email',
            // 'PrimaryPersonName',
            // 'PrimaryPersonId',
            // 'Comment:ntext',
            // 'created_by',
            // 'LastUpdatedBy',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
