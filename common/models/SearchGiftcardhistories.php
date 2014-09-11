<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Giftcardhistories;

/**
 * SearchGiftcardhistories represents the model behind the search form about `\common\models\Giftcardhistories`.
 */
class SearchGiftcardhistories extends Giftcardhistories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GiftCardHistoryId', 'GiftCardID', 'CustomerID', 'OrderID', 'GiftCardAmount', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['BasketAmount'], 'number'],
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
        $query = Giftcardhistories::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'GiftCardHistoryId' => $this->GiftCardHistoryId,
            'GiftCardID' => $this->GiftCardID,
            'CustomerID' => $this->CustomerID,
            'OrderID' => $this->OrderID,
            'BasketAmount' => $this->BasketAmount,
            'GiftCardAmount' => $this->GiftCardAmount,
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
