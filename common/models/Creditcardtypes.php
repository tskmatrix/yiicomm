<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "creditcardtypes".
 *
 * @property integer $CreditCardTypeId
 * @property string $Name
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Creditcards[] $creditcards
 */
class Creditcardtypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'creditcardtypes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Comment'], 'string'],
            [['created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CreditCardTypeId' => 'Credit Card Type ID',
            'Name' => 'Name',
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
    public function getCreditcards()
    {
        return $this->hasMany(Creditcards::className(), ['CreditCardTypeId' => 'CreditCardTypeId']);
    }
}
