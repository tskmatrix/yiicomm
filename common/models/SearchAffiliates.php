<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Affiliates;

/**
 * SearchAffiliates represents the model behind the search form about `common\models\Affiliates`.
 */
class SearchAffiliates extends Affiliates
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AffiliateId', 'CustomerId', 'ReferedCustomerId', 'ActivatedOn', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Comment'], 'safe'],
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
        $query = Affiliates::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'AffiliateId' => $this->AffiliateId,
            'CustomerId' => $this->CustomerId,
            'ReferedCustomerId' => $this->ReferedCustomerId,
            'ActivatedOn' => $this->ActivatedOn,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
