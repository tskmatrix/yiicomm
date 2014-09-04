<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "geozones".
 *
 * @property integer $GeoZoneId
 * @property integer $CountryId
 * @property string $Name
 * @property string $Comment
 * @property integer $created_by
 * @property integer $LastUpdatedBy
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 *
 * @property Cities[] $cities
 * @property Countries $country
 */
class Geozones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'geozones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CountryId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Comment'], 'string'],
            [['created_at'], 'required'],
            [['Name'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GeoZoneId' => 'Geo Zone ID',
            'CountryId' => 'Country ID',
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
    public function getCities()
    {
        return $this->hasMany(Cities::className(), ['GeoZoneId' => 'GeoZoneId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Countries::className(), ['CountryId' => 'CountryId']);
    }
}
