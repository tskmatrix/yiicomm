<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "orderdetails".
 *
 * @property integer $OrderDetailId
 * @property integer $OrderId
 * @property integer $ProductId
 * @property integer $Quantity
 * @property string $Price
 * @property string $Amount
 * @property string $DiscountedAmount
 * @property string $TaxRate
 * @property string $TaxAmout
 * @property integer $ShippedOn
 * @property integer $pProductCategoryId
 * @property integer $pSupplierId
 * @property integer $pBrandId
 * @property integer $pProductTypeId
 * @property string $pGender
 * @property string $pName
 * @property string $pSupplierDescription
 * @property string $pDescription
 * @property string $pShortDescription
 * @property string $pHtmlDescription
 * @property string $pUrlName
 * @property string $pMarketPrice
 * @property string $pPriceFromSupplier
 * @property integer $pDiscountPercent
 * @property integer $pCommissionPercent
 * @property string $pTaxPercent
 * @property string $pBarcode
 * @property boolean $pHasDifferentPriceForOptions
 * @property integer $deleted_at
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Orders $order
 */
class Orderdetails extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orderdetails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrderId', 'ProductId', 'Quantity', 'ShippedOn', 'pProductCategoryId', 'pSupplierId', 'pBrandId', 'pProductTypeId', 'pDiscountPercent', 'pCommissionPercent', 'deleted_at', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at'], 'integer'],
            [['Price', 'Amount', 'DiscountedAmount', 'TaxRate', 'TaxAmout', 'pMarketPrice', 'pPriceFromSupplier', 'pTaxPercent'], 'number'],
            [['pSupplierDescription', 'pDescription', 'Comment'], 'string'],
            [['pHasDifferentPriceForOptions'], 'boolean'],
            [['pGender'], 'string', 'max' => 1],
            [['pName', 'pUrlName'], 'string', 'max' => 500],
            [['pShortDescription'], 'string', 'max' => 2000],
            [['pHtmlDescription'], 'string', 'max' => 150],
            [['pBarcode'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OrderDetailId' => 'Order Detail ID',
            'OrderId' => 'Order ID',
            'ProductId' => 'Product ID',
            'Quantity' => 'Quantity',
            'Price' => 'Price',
            'Amount' => 'Amount',
            'DiscountedAmount' => 'Discounted Amount',
            'TaxRate' => 'Tax Rate',
            'TaxAmout' => 'Tax Amout',
            'ShippedOn' => 'Shipped On',
            'pProductCategoryId' => 'P Product Category ID',
            'pSupplierId' => 'P Supplier ID',
            'pBrandId' => 'P Brand ID',
            'pProductTypeId' => 'P Product Type ID',
            'pGender' => 'P Gender',
            'pName' => 'P Name',
            'pSupplierDescription' => 'P Supplier Description',
            'pDescription' => 'P Description',
            'pShortDescription' => 'P Short Description',
            'pHtmlDescription' => 'P Html Description',
            'pUrlName' => 'P Url Name',
            'pMarketPrice' => 'P Market Price',
            'pPriceFromSupplier' => 'P Price From Supplier',
            'pDiscountPercent' => 'P Discount Percent',
            'pCommissionPercent' => 'P Commission Percent',
            'pTaxPercent' => 'P Tax Percent',
            'pBarcode' => 'P Barcode',
            'pHasDifferentPriceForOptions' => 'P Has Different Price For Options',
            'deleted_at' => 'Deleted At',
            'Comment' => 'Comment',
            'created_by' => 'Created By',
            'LastUpdatedBy' => 'Last Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['OrderId' => 'OrderId']);
    }
}
