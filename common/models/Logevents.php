<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "logevents".
 *
 * @property integer $LogEventId
 * @property string $Name
 * @property string $Description
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Logs[] $logs
 */
class Logevents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logevents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Description', 'Comment'], 'string'],
            [['created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'LogEventId' => 'Log Event ID',
            'Name' => 'Name',
            'Description' => 'Description',
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
    public function getLogs()
    {
        return $this->hasMany(Logs::className(), ['LogEventId' => 'LogEventId']);
    }
}
