<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "queuedemails".
 *
 * @property integer $QueuedEmailID
 * @property integer $CustomerId
 * @property string $SendingTo
 * @property string $ToName
 * @property integer $Priority
 * @property string $SendingFrom
 * @property string $FromName
 * @property string $Cc
 * @property string $Bcc
 * @property string $Subject
 * @property string $Body
 * @property integer $SendTries
 * @property integer $SentOn
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 */
class Queuedemails extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'queuedemails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CustomerId', 'Priority', 'SendTries', 'SentOn', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Body', 'Comment'], 'string'],
            [['SendingTo', 'SendingFrom', 'Cc', 'Bcc'], 'string', 'max' => 255],
            [['ToName', 'FromName', 'Subject'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'QueuedEmailID' => 'Queued Email ID',
            'CustomerId' => 'Customer ID',
            'SendingTo' => 'Sending To',
            'ToName' => 'To Name',
            'Priority' => 'Priority',
            'SendingFrom' => 'Sending From',
            'FromName' => 'From Name',
            'Cc' => 'Cc',
            'Bcc' => 'Bcc',
            'Subject' => 'Subject',
            'Body' => 'Body',
            'SendTries' => 'Send Tries',
            'SentOn' => 'Sent On',
            'Comment' => 'Comment',
            'created_by' => 'Created By',
            'LastUpdatedBy' => 'Last Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
