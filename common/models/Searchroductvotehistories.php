<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Productvotehistories;

/**
 * Searchroductvotehistories represents the model behind the search form about `common\models\Productvotehistories`.
 */
class Searchroductvotehistories extends Productvotehistories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductVoteHistoryId', 'CustomerId', 'ProductId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Message', 'Comment'], 'safe'],
            [['IsLiked'], 'boolean'],
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
        $query = Productvotehistories::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProductVoteHistoryId' => $this->ProductVoteHistoryId,
            'CustomerId' => $this->CustomerId,
            'ProductId' => $this->ProductId,
            'IsLiked' => $this->IsLiked,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Message', $this->Message])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
