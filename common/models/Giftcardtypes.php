<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "giftcardtypes".
 *
 * @property integer $GiftCardTypeId
 * @property string $Name
 * @property string $Description
 * @property integer $Amount
 * @property string $ImageUrl
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Giftcards[] $giftcards
 */
class Giftcardtypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'giftcardtypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Description'], 'string'],
            [['Amount', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name'], 'string', 'max' => 50],
            [['ImageUrl'], 'string', 'max' => 1000],
            [['Comment'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GiftCardTypeId' => 'Gift Card Type ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'Amount' => 'Amount',
            'ImageUrl' => 'Image Url',
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
    public function getGiftcards()
    {
        return $this->hasMany(Giftcards::className(), ['GiftCardTypeId' => 'GiftCardTypeId']);
    }
}
