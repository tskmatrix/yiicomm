<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Shippings;

/**
 * SearchShippings represents the model behind the search form about `common\models\Shippings`.
 */
class SearchShippings extends Shippings
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ShippingId', 'OrderId', 'OrderDetailId', 'ShippingTypeId', 'ShippingStatusId', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['ShippingAddressText', 'ShippingPerson', 'ShippingNumber', 'Comment'], 'safe'],
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
        $query = Shippings::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ShippingId' => $this->ShippingId,
            'OrderId' => $this->OrderId,
            'OrderDetailId' => $this->OrderDetailId,
            'ShippingTypeId' => $this->ShippingTypeId,
            'ShippingStatusId' => $this->ShippingStatusId,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'ShippingAddressText', $this->ShippingAddressText])
            ->andFilterWhere(['like', 'ShippingPerson', $this->ShippingPerson])
            ->andFilterWhere(['like', 'ShippingNumber', $this->ShippingNumber])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
