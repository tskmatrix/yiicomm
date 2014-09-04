<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "creditcards".
 *
 * @property integer $CreditCardId
 * @property integer $CreditCardTypeId
 * @property integer $BankId
 * @property string $Name
 * @property string $Bin
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Banks $bank
 * @property Creditcardtypes $creditCardType
 * @property Paymenttransactions[] $paymenttransactions
 */
class Creditcards extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'creditcards';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CreditCardTypeId', 'BankId', 'Name'], 'required'],
            [['CreditCardTypeId', 'BankId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Comment'], 'string'],
            [['Name'], 'string', 'max' => 250],
            [['Bin'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CreditCardId' => 'Credit Card ID',
            'CreditCardTypeId' => 'Credit Card Type ID',
            'BankId' => 'Bank ID',
            'Name' => 'Name',
            'Bin' => 'Bin',
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
    public function getBank()
    {
        return $this->hasOne(Banks::className(), ['BankId' => 'BankId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreditCardType()
    {
        return $this->hasOne(Creditcardtypes::className(), ['CreditCardTypeId' => 'CreditCardTypeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymenttransactions()
    {
        return $this->hasMany(Paymenttransactions::className(), ['CreditCardId' => 'CreditCardId']);
    }
}
