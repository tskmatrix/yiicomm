<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\Expression;

class YiicommActiveRecord extends ActiveRecord
{
	const FLAG_FALSE = 0;
    const FLAG_TRUE = 1;
    
    const GENDER_MALE = 'M';
    const GENDER_FEMALE = 'F';
    const GENDER_PRODUCT = 'A';
    
    /**
     * @inheritdoc
     * Attaches both the Timestamp and Blameable behaviors
     */
    public function behaviors()
    {
    	return [
    	[
    	'class' => TimestampBehavior::className(),
    	'createdAtAttribute' => 'created_at',
    	'updatedAtAttribute' => 'updated_at',
    	],
    	[
    	'class' => BlameableBehavior::className(),
    	'createdByAttribute' => 'created_by',
    	'updatedByAttribute' => 'LastUpdatedBy',
    	],
    
    	];
    }
    
    function getGenderOptions()
    {
    	return array(
    			self::GENDER_PRODUCT => 'Asexual',
    			self::GENDER_MALE => 'Male',
    			self::GENDER_FEMALE => 'Female',
    	);
    }
    public function getFlagOptions()
    {
    	return array(
    			self::FLAG_TRUE => 'Yes',
    			self::FLAG_FALSE => 'No',
    	);
    }
}