<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Campaignproducts;

/**
 * SearchCampaignproducts represents the model behind the search form about `common\models\Campaignproducts`.
 */
class SearchCampaignproducts extends Campaignproducts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CampaignProductId', 'CampaignId', 'ProductId', 'StockUnitId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Price', 'Stock'], 'number'],
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
        $query = Campaignproducts::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'CampaignProductId' => $this->CampaignProductId,
            'CampaignId' => $this->CampaignId,
            'ProductId' => $this->ProductId,
            'Price' => $this->Price,
            'Stock' => $this->Stock,
            'StockUnitId' => $this->StockUnitId,
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
