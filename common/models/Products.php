<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "products".
 *
 * @property integer $ProductId
 * @property integer $ProductCategoryId
 * @property integer $SupplierId
 * @property integer $BrandId
 * @property integer $ProductTypeId
 * @property string $Gender
 * @property string $Name
 * @property string $SupplierDescription
 * @property string $Description
 * @property string $ShortDescriptioon
 * @property string $HtmlDescription
 * @property string $UrlName
 * @property integer $DiscountPercent
 * @property integer $CommissionPercent
 * @property string $TaxPercent
 * @property string $Price
 * @property string $PriceMarket
 * @property string $PriceSupplier
 * @property integer $MaximumPurchaseCount
 * @property boolean $IsActive
 * @property boolean $IsFeatured
 * @property boolean $IsOnVote
 * @property integer $VoteCount
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $PublishedOn
 * @property integer $UpdateOn
 * @property integer $created_at
 * @property integer $deleted_at
 *
 * @property Productmedias[] $productmedias
 * @property Productoptionprices[] $productoptionprices
 * @property Productoptions[] $productoptions
 * @property Productpricehistories[] $productpricehistories
 * @property Productcategories $productCategory
 * @property Producttypes $productType
 * @property Productvotehistories[] $productvotehistories
 */
class Products extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductCategoryId', 'SupplierId', 'BrandId', 'ProductTypeId', 'DiscountPercent', 'CommissionPercent', 'MaximumPurchaseCount', 'VoteCount', 'created_by', 'LastUpdatedBy', 'PublishedOn', 'UpdateOn', 'created_at', 'deleted_at'], 'integer'],
            [['SupplierDescription', 'Description', 'Comment'], 'string'],
            [['TaxPercent', 'Price', 'PriceMarket', 'PriceSupplier'], 'number'],
            [['IsActive', 'IsFeatured', 'IsOnVote'], 'boolean'],
            [['Gender'], 'string', 'max' => 1],
            [['Name', 'UrlName'], 'string', 'max' => 500],
            [['ShortDescriptioon'], 'string', 'max' => 2000],
            [['HtmlDescription'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductId' => 'Product ID',
            'ProductCategoryId' => 'Product Category ID',
            'SupplierId' => 'Supplier ID',
            'BrandId' => 'Brand ID',
            'ProductTypeId' => 'Product Type ID',
            'Gender' => 'Gender',
            'Name' => 'Name',
            'SupplierDescription' => 'Supplier Description',
            'Description' => 'Description',
            'ShortDescriptioon' => 'Short Descriptioon',
            'HtmlDescription' => 'Html Description',
            'UrlName' => 'Url Name',
            'DiscountPercent' => 'Discount Percent',
            'CommissionPercent' => 'Commission Percent',
            'TaxPercent' => 'Tax Percent',
            'Price' => 'Price',
            'PriceMarket' => 'Price Market',
            'PriceSupplier' => 'Price Supplier',
            'MaximumPurchaseCount' => 'Maximum Purchase Count',
            'IsActive' => 'Is Active',
            'IsFeatured' => 'Is Featured',
            'IsOnVote' => 'Is On Vote',
            'VoteCount' => 'Vote Count',
            'Comment' => 'Comment',
            'created_by' => 'Created By',
            'LastUpdatedBy' => 'Last Updated By',
            'PublishedOn' => 'Published On',
            'UpdateOn' => 'Update On',
            'created_at' => 'Created At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductmedias()
    {
        return $this->hasMany(Productmedias::className(), ['ProductId' => 'ProductId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoptionprices()
    {
        return $this->hasMany(Productoptionprices::className(), ['ProductId' => 'ProductId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductoptions()
    {
        return $this->hasMany(Productoptions::className(), ['ProductId' => 'ProductId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductpricehistories()
    {
        return $this->hasMany(Productpricehistories::className(), ['ProductId' => 'ProductId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductCategory()
    {
        return $this->hasOne(Productcategories::className(), ['ProductCategoryId' => 'ProductCategoryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductType()
    {
        return $this->hasOne(Producttypes::className(), ['ProductTypeId' => 'ProductTypeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductvotehistories()
    {
        return $this->hasMany(Productvotehistories::className(), ['ProductId' => 'ProductId']);
    }
}
