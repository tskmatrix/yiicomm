<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "productoptioncombinations".
 *
 * @property integer $ProductOptionCombinationId
 * @property integer $ProductId
 * @property integer $ProductOptionGroupMemberId1
 * @property integer $ProductOptionGroupMemberId2
 * @property integer $ProductOptionGroupMemberId3
 * @property integer $ProductOptionGroupMemberId4
 * @property integer $ProductOptionGroupMemberId5
 * @property string $Barcode
 * @property string $Price
 * @property string $PriceMarket
 * @property string $PriceSupplier
 * @property string $CampaignStock
 * @property string $ActualStock
 * @property string $StockWarningLevel
 * @property integer $StockUnitId
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 */
class Productoptioncombinations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productoptioncombinations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductId', 'ProductOptionGroupMemberId1', 'ProductOptionGroupMemberId2', 'ProductOptionGroupMemberId3', 'ProductOptionGroupMemberId4', 'ProductOptionGroupMemberId5', 'StockUnitId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Price', 'PriceMarket', 'PriceSupplier', 'CampaignStock', 'ActualStock', 'StockWarningLevel'], 'number'],
            [['Comment'], 'string'],
            [['Barcode'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductOptionCombinationId' => 'Product Option Combination ID',
            'ProductId' => 'Product ID',
            'ProductOptionGroupMemberId1' => 'Product Option Group Member Id1',
            'ProductOptionGroupMemberId2' => 'Product Option Group Member Id2',
            'ProductOptionGroupMemberId3' => 'Product Option Group Member Id3',
            'ProductOptionGroupMemberId4' => 'Product Option Group Member Id4',
            'ProductOptionGroupMemberId5' => 'Product Option Group Member Id5',
            'Barcode' => 'Barcode',
            'Price' => 'Price',
            'PriceMarket' => 'Price Market',
            'PriceSupplier' => 'Price Supplier',
            'CampaignStock' => 'Campaign Stock',
            'ActualStock' => 'Actual Stock',
            'StockWarningLevel' => 'Stock Warning Level',
            'StockUnitId' => 'Stock Unit ID',
            'Comment' => 'Comment',
            'created_by' => 'Created By',
            'LastUpdatedBy' => 'Last Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
