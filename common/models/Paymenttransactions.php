<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "paymenttransactions".
 *
 * @property integer $PaymentId
 * @property integer $OrderId
 * @property integer $BankId
 * @property integer $CreditCardTypeId
 * @property integer $CreditCardId
 * @property integer $PaymentTypeId
 * @property string $VPosOrderId
 * @property string $ResponseSource
 * @property string $ResponseCode
 * @property string $ResponseReasonCode
 * @property string $ResponseMessage
 * @property string $ResponseErrorMsg
 * @property string $ResponseSysErrMsg
 * @property string $RequestMode
 * @property string $RequestChannelcode
 * @property string $RequestVersion
 * @property string $RequestProvUserId
 * @property string $UserId
 * @property string $RequestId
 * @property string $RequestMerchantId
 * @property string $RequestTransactionType
 * @property string $RequestMotoInd
 * @property string $RetrefNum
 * @property string $AuthCode
 * @property string $BatchNum
 * @property string $SequenceNum
 * @property integer $ProvDate
 * @property string $MaskedCardNumber
 * @property string $MaskedCardHolderName
 * @property string $RequestHashData
 * @property string $ResponseHashData
 * @property string $PaymentRequestIp
 * @property string $CurrencyCode
 * @property integer $InstalmentCount
 * @property boolean $IsInstalmentBuying
 * @property boolean $IsPaidWithBonusPoints
 * @property boolean $IsCompleted
 * @property string $BonusPointAmount
 * @property string $Amount
 * @property string $TotalAmount
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Orders[] $orders
 * @property Creditcards $creditCard
 * @property Paymenttypes $paymentType
 * @property Currencies $currencyCode
 */
class Paymenttransactions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paymenttransactions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OrderId', 'BankId', 'CreditCardTypeId', 'CreditCardId', 'PaymentTypeId', 'AuthCode', 'TotalAmount', 'created_at', 'updated_at'], 'required'],
            [['OrderId', 'BankId', 'CreditCardTypeId', 'CreditCardId', 'PaymentTypeId', 'ProvDate', 'InstalmentCount', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['ResponseMessage', 'ResponseErrorMsg', 'ResponseSysErrMsg', 'RequestMode', 'RequestChannelcode', 'RequestVersion', 'RequestProvUserId', 'UserId', 'RequestId', 'RequestMerchantId', 'RequestTransactionType', 'RequestMotoInd', 'Comment'], 'string'],
            [['IsInstalmentBuying', 'IsPaidWithBonusPoints', 'IsCompleted'], 'boolean'],
            [['BonusPointAmount', 'Amount', 'TotalAmount'], 'number'],
            [['VPosOrderId', 'ResponseSource', 'RetrefNum', 'AuthCode', 'BatchNum', 'SequenceNum', 'MaskedCardHolderName', 'PaymentRequestIp'], 'string', 'max' => 50],
            [['ResponseCode', 'ResponseReasonCode'], 'string', 'max' => 2],
            [['MaskedCardNumber'], 'string', 'max' => 16],
            [['RequestHashData', 'ResponseHashData'], 'string', 'max' => 40],
            [['CurrencyCode'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PaymentId' => 'Payment ID',
            'OrderId' => 'Order ID',
            'BankId' => 'Bank ID',
            'CreditCardTypeId' => 'Credit Card Type ID',
            'CreditCardId' => 'Credit Card ID',
            'PaymentTypeId' => 'Payment Type ID',
            'VPosOrderId' => 'Vpos Order ID',
            'ResponseSource' => 'Response Source',
            'ResponseCode' => 'Response Code',
            'ResponseReasonCode' => 'Response Reason Code',
            'ResponseMessage' => 'Response Message',
            'ResponseErrorMsg' => 'Response Error Msg',
            'ResponseSysErrMsg' => 'Response Sys Err Msg',
            'RequestMode' => 'Request Mode',
            'RequestChannelcode' => 'Request Channelcode',
            'RequestVersion' => 'Request Version',
            'RequestProvUserId' => 'Request Prov User ID',
            'UserId' => 'User ID',
            'RequestId' => 'Request ID',
            'RequestMerchantId' => 'Request Merchant ID',
            'RequestTransactionType' => 'Request Transaction Type',
            'RequestMotoInd' => 'Request Moto Ind',
            'RetrefNum' => 'Retref Num',
            'AuthCode' => 'Auth Code',
            'BatchNum' => 'Batch Num',
            'SequenceNum' => 'Sequence Num',
            'ProvDate' => 'Prov Date',
            'MaskedCardNumber' => 'Masked Card Number',
            'MaskedCardHolderName' => 'Masked Card Holder Name',
            'RequestHashData' => 'Request Hash Data',
            'ResponseHashData' => 'Response Hash Data',
            'PaymentRequestIp' => 'Payment Request Ip',
            'CurrencyCode' => 'Currency Code',
            'InstalmentCount' => 'Instalment Count',
            'IsInstalmentBuying' => 'Is Instalment Buying',
            'IsPaidWithBonusPoints' => 'Is Paid With Bonus Points',
            'IsCompleted' => 'Is Completed',
            'BonusPointAmount' => 'Bonus Point Amount',
            'Amount' => 'Amount',
            'TotalAmount' => 'Total Amount',
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
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['PaymentId' => 'PaymentId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreditCard()
    {
        return $this->hasOne(Creditcards::className(), ['CreditCardId' => 'CreditCardId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentType()
    {
        return $this->hasOne(Paymenttypes::className(), ['PaymentTypeId' => 'PaymentTypeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencyCode()
    {
        return $this->hasOne(Currencies::className(), ['CurrencyCode' => 'CurrencyCode']);
    }
}
