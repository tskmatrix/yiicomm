<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "phones".
 *
 * @property integer $PhoneId
 * @property integer $UserId
 * @property string $Phone
 * @property boolean $IsFax
 * @property boolean $IsPrimary
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property User $user
 */
class Phones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['IsFax', 'IsPrimary'], 'boolean'],
            [['Comment'], 'string'],
            [['Phone'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PhoneId' => 'Phone ID',
            'UserId' => 'User ID',
            'Phone' => 'Phone',
            'IsFax' => 'Is Fax',
            'IsPrimary' => 'Is Primary',
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'UserId']);
    }
}
