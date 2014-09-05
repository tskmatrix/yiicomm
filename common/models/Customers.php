<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "customers".
 *
 * @property integer $CustomerId
 * @property integer $UserId
 * @property boolean $IsMallingActive
 * @property string $VirtualMoney
 * @property string $AffiliateSlug
 * @property integer $RefererCustomerId
 * @property integer $LastInvoiceAddressId
 * @property integer $LastShippingAddressId
 * @property string $LastCreditCardName
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Affiliates[] $affiliates
 * @property Giftcardhistories[] $giftcardhistories
 */
class Customers extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'RefererCustomerId', 'LastInvoiceAddressId', 'LastShippingAddressId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['IsMallingActive'], 'boolean'],
            [['VirtualMoney'], 'number'],
            [['Comment'], 'string'],
            [['AffiliateSlug', 'LastCreditCardName'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CustomerId' => 'Customer ID',
            'UserId' => 'User ID',
            'IsMallingActive' => 'Is Malling Active',
            'VirtualMoney' => 'Virtual Money',
            'AffiliateSlug' => 'Affiliate Slug',
            'RefererCustomerId' => 'Referer Customer ID',
            'LastInvoiceAddressId' => 'Last Invoice Address ID',
            'LastShippingAddressId' => 'Last Shipping Address ID',
            'LastCreditCardName' => 'Last Credit Card Name',
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
    public function getAffiliates()
    {
        return $this->hasMany(Affiliates::className(), ['CustomerId' => 'CustomerId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiftcardhistories()
    {
        return $this->hasMany(Giftcardhistories::className(), ['CustomerID' => 'CustomerId']);
    }
}
