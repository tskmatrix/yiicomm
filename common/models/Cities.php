<?php

namespace common\models;

use Yii;
use common\models\YiicommActiveRecord;

/**
 * This is the model class for table "cities".
 *
 * @property integer $CityId
 * @property integer $GeoZoneId
 * @property string $Name
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Geozones $geoZone
 * @property Counties[] $counties
 */
class Cities extends YiicommActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GeoZoneId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name'], 'required'],
            [['Comment'], 'string'],
            [['Name'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CityId' => 'City ID',
            'GeoZoneId' => 'Geo Zone ID',
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
    public function getGeoZone()
    {
        return $this->hasOne(Geozones::className(), ['GeoZoneId' => 'GeoZoneId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCounties()
    {
        return $this->hasMany(Counties::className(), ['CityId' => 'CityId']);
    }
}
