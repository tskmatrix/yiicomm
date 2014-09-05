<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Productcategories;

/**
 * SearchProductCategories represents the model behind the search form about `common\models\Productcategories`.
 */
class SearchProductCategories extends Productcategories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductCategoryId', 'ParentProductCategoryId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name', 'Description', 'ShortDescription', 'HtmlDecription', 'AvatarUrl', 'IconUrl', 'Comment'], 'safe'],
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
        $query = Productcategories::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProductCategoryId' => $this->ProductCategoryId,
            'ParentProductCategoryId' => $this->ParentProductCategoryId,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'ShortDescription', $this->ShortDescription])
            ->andFilterWhere(['like', 'HtmlDecription', $this->HtmlDecription])
            ->andFilterWhere(['like', 'AvatarUrl', $this->AvatarUrl])
            ->andFilterWhere(['like', 'IconUrl', $this->IconUrl])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
