<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "giftcards".
 *
 * @property integer $GiftCardId
 * @property integer $GiftCardTypeId
 * @property string $Name
 * @property string $Description
 * @property string $GiftCardCode
 * @property integer $SenderCustomerId
 * @property string $SenderName
 * @property string $SenderPhone
 * @property string $SenderEmail
 * @property string $SenderMessage
 * @property integer $RecipientCustomerId
 * @property string $RecipientName
 * @property string $RecipientPhone
 * @property string $RecipientEmail
 * @property integer $StartedOn
 * @property integer $EndedOn
 * @property boolean $IsActive
 * @property boolean $IsNotified
 * @property boolean $IsLimited
 * @property string $MinimumBasketAmount
 * @property integer $MinimumBasketItemCount
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Giftcardhistories[] $giftcardhistories
 * @property Giftcardtypes $giftCardType
 */
class Giftcards extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'giftcards';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GiftCardTypeId', 'SenderCustomerId', 'RecipientCustomerId', 'StartedOn', 'EndedOn', 'MinimumBasketItemCount', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Description', 'SenderMessage', 'Comment'], 'string'],
            [['IsActive', 'IsNotified', 'IsLimited'], 'boolean'],
            [['MinimumBasketAmount'], 'number'],
            [['Name'], 'string', 'max' => 500],
            [['GiftCardCode'], 'string', 'max' => 50],
            [['SenderName', 'RecipientName'], 'string', 'max' => 100],
            [['SenderPhone', 'RecipientPhone'], 'string', 'max' => 10],
            [['SenderEmail', 'RecipientEmail'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GiftCardId' => 'Gift Card ID',
            'GiftCardTypeId' => 'Gift Card Type ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'GiftCardCode' => 'Gift Card Code',
            'SenderCustomerId' => 'Sender Customer ID',
            'SenderName' => 'Sender Name',
            'SenderPhone' => 'Sender Phone',
            'SenderEmail' => 'Sender Email',
            'SenderMessage' => 'Sender Message',
            'RecipientCustomerId' => 'Recipient Customer ID',
            'RecipientName' => 'Recipient Name',
            'RecipientPhone' => 'Recipient Phone',
            'RecipientEmail' => 'Recipient Email',
            'StartedOn' => 'Started On',
            'EndedOn' => 'Ended On',
            'IsActive' => 'Is Active',
            'IsNotified' => 'Is Notified',
            'IsLimited' => 'Is Limited',
            'MinimumBasketAmount' => 'Minimum Basket Amount',
            'MinimumBasketItemCount' => 'Minimum Basket Item Count',
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
    public function getGiftcardhistories()
    {
        return $this->hasMany(Giftcardhistories::className(), ['GiftCardID' => 'GiftCardId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiftCardType()
    {
        return $this->hasOne(Giftcardtypes::className(), ['GiftCardTypeId' => 'GiftCardTypeId']);
    }
}
