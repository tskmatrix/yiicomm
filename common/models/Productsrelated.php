<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "Productsrelated".
 *
 * @property integer $ProductsRelatedId
 * @property integer $ProductId
 * @property integer $RelatedProductId1
 * @property integer $RelatedProductId2
 * @property integer $RelatedProductId3
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Products $product
 */
class Productsrelated extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Productsrelated';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at'], 'required'],
            [['ProductId', 'RelatedProductId1', 'RelatedProductId2', 'RelatedProductId3', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductsRelatedId' => 'Products Related ID',
            'ProductId' => 'Product ID',
            'RelatedProductId1' => 'Related Product Id1',
            'RelatedProductId2' => 'Related Product Id2',
            'RelatedProductId3' => 'Related Product Id3',
            'created_by' => 'Created By',
            'LastUpdatedBy' => 'Last Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['ProductId' => 'ProductId']);
    }
}
