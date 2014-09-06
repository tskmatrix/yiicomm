<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "orders".
 *
 * @property integer $OrderId
 * @property integer $CustomerId
 * @property integer $CampaignId
 * @property integer $PaymentId
 * @property integer $OrderStatusId
 * @property string $CustomerNote
 * @property string $InvoiceAddressText
 * @property string $InvoicePerson
 * @property string $InvoiceTaxNumber
 * @property string $InvoiceTaxOffice
 * @property integer $InvoicedOn
 * @property string $PaidAmount
 * @property string $TotalDiscountAmount
 * @property string $TaxAmount
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Orderdetails[] $orderdetails
 * @property Orderstatuses $orderStatus
 * @property Paymenttransactions $payment
 * @property Shippings[] $shippings
 */
class Orders extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CustomerId', 'CampaignId', 'PaymentId', 'OrderStatusId', 'InvoicedOn', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['CustomerNote', 'InvoiceAddressText', 'Comment'], 'string'],
            [['PaidAmount', 'TotalDiscountAmount', 'TaxAmount'], 'number'],
            [['InvoicePerson'], 'string', 'max' => 500],
            [['InvoiceTaxNumber', 'InvoiceTaxOffice'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OrderId' => 'Order ID',
            'CustomerId' => 'Customer ID',
            'CampaignId' => 'Campaign ID',
            'PaymentId' => 'Payment ID',
            'OrderStatusId' => 'Order Status ID',
            'CustomerNote' => 'Customer Note',
            'InvoiceAddressText' => 'Invoice Address Text',
            'InvoicePerson' => 'Invoice Person',
            'InvoiceTaxNumber' => 'Invoice Tax Number',
            'InvoiceTaxOffice' => 'Invoice Tax Office',
            'InvoicedOn' => 'Invoiced On',
            'PaidAmount' => 'Paid Amount',
            'TotalDiscountAmount' => 'Total Discount Amount',
            'TaxAmount' => 'Tax Amount',
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
    public function getOrderdetails()
    {
        return $this->hasMany(Orderdetails::className(), ['OrderId' => 'OrderId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderStatus()
    {
        return $this->hasOne(Orderstatuses::className(), ['OrderStatusId' => 'OrderStatusId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayment()
    {
        return $this->hasOne(Paymenttransactions::className(), ['PaymentId' => 'PaymentId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShippings()
    {
        return $this->hasMany(Shippings::className(), ['OrderId' => 'OrderId']);
    }
}
