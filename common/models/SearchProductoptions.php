<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Productoptions;

/**
 * SearchProductoptions represents the model behind the search form about `common\models\Productoptions`.
 */
class SearchProductoptions extends Productoptions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductOptionId', 'ProductId', 'ProductOptionGroupId', 'ProductOptionGroupMemberId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Value', 'Comment'], 'safe'],
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
        $query = Productoptions::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ProductOptionId' => $this->ProductOptionId,
            'ProductId' => $this->ProductId,
            'ProductOptionGroupId' => $this->ProductOptionGroupId,
            'ProductOptionGroupMemberId' => $this->ProductOptionGroupMemberId,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Value', $this->Value])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
