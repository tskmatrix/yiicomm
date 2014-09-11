<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "giftcardhistories".
 *
 * @property integer $GiftCardHistoryId
 * @property integer $GiftCardID
 * @property integer $CustomerID
 * @property integer $OrderID
 * @property string $BasketAmount
 * @property integer $GiftCardAmount
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Customers $customer
 * @property Giftcards $giftCard
 */
class Giftcardhistories extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'giftcardhistories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GiftCardID', 'CustomerID', 'OrderID', 'GiftCardAmount', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['BasketAmount'], 'number'],
            [['Comment'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GiftCardHistoryId' => 'Gift Card History ID',
            'GiftCardID' => 'Gift Card ID',
            'CustomerID' => 'Customer ID',
            'OrderID' => 'Order ID',
            'BasketAmount' => 'Basket Amount',
            'GiftCardAmount' => 'Gift Card Amount',
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
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['CustomerId' => 'CustomerID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGiftCard()
    {
        return $this->hasOne(Giftcards::className(), ['GiftCardId' => 'GiftCardID']);
    }
}
