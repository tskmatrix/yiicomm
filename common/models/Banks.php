<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "banks".
 *
 * @property integer $BankId
 * @property string $Name
 * @property string $WebSite
 * @property string $Eft
 * @property string $Swift
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Creditcards[] $creditcards
 */
class Banks extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banks';
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
            [['Name'], 'string', 'max' => 250],
            [['WebSite'], 'string', 'max' => 500],
            [['Eft', 'Swift'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'BankId' => 'Bank ID',
            'Name' => 'Name',
            'WebSite' => 'Web Site',
            'Eft' => 'Eft',
            'Swift' => 'Swift',
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
        return $this->hasMany(Creditcards::className(), ['BankId' => 'BankId']);
    }
}
