<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Campaigns;

/**
 * SearchCampaigns represents the model behind the search form about `common\models\Campaigns`.
 */
class SearchCampaigns extends Campaigns
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CampaignId', 'CampaignTypeId', 'DiscountPercent', 'OrderLimit', 'MaximumProductPurchaceLimit', 'MinimumProductPurchaceLimit', 'StartedOn', 'EndedOn', 'ShippingStartsOn', 'ShippingEndsOn', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name', 'ShortDescription', 'Description', 'HtmlDescription', 'ImageUrl', 'Comment'], 'safe'],
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
        $query = Campaigns::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'CampaignId' => $this->CampaignId,
            'CampaignTypeId' => $this->CampaignTypeId,
            'DiscountPercent' => $this->DiscountPercent,
            'OrderLimit' => $this->OrderLimit,
            'MaximumProductPurchaceLimit' => $this->MaximumProductPurchaceLimit,
            'MinimumProductPurchaceLimit' => $this->MinimumProductPurchaceLimit,
            'StartedOn' => $this->StartedOn,
            'EndedOn' => $this->EndedOn,
            'ShippingStartsOn' => $this->ShippingStartsOn,
            'ShippingEndsOn' => $this->ShippingEndsOn,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'ShortDescription', $this->ShortDescription])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'HtmlDescription', $this->HtmlDescription])
            ->andFilterWhere(['like', 'ImageUrl', $this->ImageUrl])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
