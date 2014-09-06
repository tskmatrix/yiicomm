<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Productmedias;

/**
 * SearchProductmedias represents the model behind the search form about `common\models\Productmedias`.
 */
class SearchProductmedias extends Productmedias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductMediaId', 'ProductId', 'DisplayOrder', 'created_by', 'LastUpdatedBy', 'updated_at', 'created_at', 'deleted_at'], 'integer'],
            [['SmallImageUrl', 'ImageUrl', 'ZoomImageUrl', 'EmbedCode', 'HtmlAlt', 'HtmlTitle', 'FeaturedText', 'Comment'], 'safe'],
            [['IsVideo', 'IsPrimary', 'IsActive'], 'boolean'],
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
        $query = Productmedias::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProductMediaId' => $this->ProductMediaId,
            'ProductId' => $this->ProductId,
            'DisplayOrder' => $this->DisplayOrder,
            'IsVideo' => $this->IsVideo,
            'IsPrimary' => $this->IsPrimary,
            'IsActive' => $this->IsActive,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'SmallImageUrl', $this->SmallImageUrl])
            ->andFilterWhere(['like', 'ImageUrl', $this->ImageUrl])
            ->andFilterWhere(['like', 'ZoomImageUrl', $this->ZoomImageUrl])
            ->andFilterWhere(['like', 'EmbedCode', $this->EmbedCode])
            ->andFilterWhere(['like', 'HtmlAlt', $this->HtmlAlt])
            ->andFilterWhere(['like', 'HtmlTitle', $this->HtmlTitle])
            ->andFilterWhere(['like', 'FeaturedText', $this->FeaturedText])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
