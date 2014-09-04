<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "productoptionprices".
 *
 * @property integer $ProductOptionPriceId
 * @property integer $ProductId
 * @property integer $ProductOptionGroupMemberId1
 * @property integer $ProductOptionGroupMemberId2
 * @property integer $ProductOptionGroupMemberId3
 * @property integer $ProductOptionGroupMemberId4
 * @property string $Price
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Productoptiongroupmembers $productOptionGroupMemberId4
 * @property Products $product
 * @property Productoptiongroupmembers $productOptionGroupMemberId1
 * @property Productoptiongroupmembers $productOptionGroupMemberId3
 * @property Productoptiongroupmembers $productOptionGroupMemberId2
 * @property Productpricehistories[] $productpricehistories
 */
class Productoptionprices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productoptionprices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductId', 'ProductOptionGroupMemberId1', 'ProductOptionGroupMemberId2', 'ProductOptionGroupMemberId3', 'ProductOptionGroupMemberId4', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Price'], 'number'],
            [['Comment'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ProductOptionPriceId' => 'Product Option Price ID',
            'ProductId' => 'Product ID',
            'ProductOptionGroupMemberId1' => 'Product Option Group Member Id1',
            'ProductOptionGroupMemberId2' => 'Product Option Group Member Id2',
            'ProductOptionGroupMemberId3' => 'Product Option Group Member Id3',
            'ProductOptionGroupMemberId4' => 'Product Option Group Member Id4',
            'Price' => 'Price',
            'Comment' => 'Comment',
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
    public function getProductOptionGroupMemberId4()
    {
        return $this->hasOne(Productoptiongroupmembers::className(), ['ProductOptionGroupMemberId' => 'ProductOptionGroupMemberId4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['ProductId' => 'ProductId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductOptionGroupMemberId1()
    {
        return $this->hasOne(Productoptiongroupmembers::className(), ['ProductOptionGroupMemberId' => 'ProductOptionGroupMemberId1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductOptionGroupMemberId3()
    {
        return $this->hasOne(Productoptiongroupmembers::className(), ['ProductOptionGroupMemberId' => 'ProductOptionGroupMemberId3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductOptionGroupMemberId2()
    {
        return $this->hasOne(Productoptiongroupmembers::className(), ['ProductOptionGroupMemberId' => 'ProductOptionGroupMemberId2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductpricehistories()
    {
        return $this->hasMany(Productpricehistories::className(), ['ProductOptionPriceId' => 'ProductOptionPriceId']);
    }
}
