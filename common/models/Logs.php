<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "logs".
 *
 * @property integer $LogId
 * @property integer $UserId
 * @property integer $LogEventId
 * @property string $Expression
 * @property string $OldRow
 * @property string $NewRow
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Logevents $logEvent
 * @property User $user
 */
class Logs extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['UserId', 'LogEventId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Expression', 'OldRow', 'NewRow', 'Comment'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'LogId' => 'Log ID',
            'UserId' => 'User ID',
            'LogEventId' => 'Log Event ID',
            'Expression' => 'Expression',
            'OldRow' => 'Old Row',
            'NewRow' => 'New Row',
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
    public function getLogEvent()
    {
        return $this->hasOne(Logevents::className(), ['LogEventId' => 'LogEventId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'UserId']);
    }
}
