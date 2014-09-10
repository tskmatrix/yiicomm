<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Queuedemails;

/**
 * SearchQueuedemails represents the model behind the search form about `\common\models\Queuedemails`.
 */
class SearchQueuedemails extends Queuedemails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['QueuedEmailID', 'CustomerId', 'Priority', 'SendTries', 'SentOn', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['SendingTo', 'ToName', 'SendingFrom', 'FromName', 'Cc', 'Bcc', 'Subject', 'Body', 'Comment'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Queuedemails::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'QueuedEmailID' => $this->QueuedEmailID,
            'CustomerId' => $this->CustomerId,
            'Priority' => $this->Priority,
            'SendTries' => $this->SendTries,
            'SentOn' => $this->SentOn,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'SendingTo', $this->SendingTo])
            ->andFilterWhere(['like', 'ToName', $this->ToName])
            ->andFilterWhere(['like', 'SendingFrom', $this->SendingFrom])
            ->andFilterWhere(['like', 'FromName', $this->FromName])
            ->andFilterWhere(['like', 'Cc', $this->Cc])
            ->andFilterWhere(['like', 'Bcc', $this->Bcc])
            ->andFilterWhere(['like', 'Subject', $this->Subject])
            ->andFilterWhere(['like', 'Body', $this->Body])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
