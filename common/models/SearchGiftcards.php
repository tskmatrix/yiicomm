<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Giftcards;

/**
 * SearchGiftcards represents the model behind the search form about `common\models\Giftcards`.
 */
class SearchGiftcards extends Giftcards
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GiftCardId', 'GiftCardTypeId', 'SenderCustomerId', 'RecipientCustomerId', 'StartedOn', 'EndedOn', 'MinimumBasketItemCount', 'created_by', 'LastUpdatedBy', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['Name', 'Description', 'GiftCardCode', 'SenderName', 'SenderPhone', 'SenderEmail', 'SenderMessage', 'RecipientName', 'RecipientPhone', 'RecipientEmail', 'Comment'], 'safe'],
            [['IsActive', 'IsNotified', 'IsLimited'], 'boolean'],
            [['MinimumBasketAmount'], 'number'],
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
        $query = Giftcards::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'GiftCardId' => $this->GiftCardId,
            'GiftCardTypeId' => $this->GiftCardTypeId,
            'SenderCustomerId' => $this->SenderCustomerId,
            'RecipientCustomerId' => $this->RecipientCustomerId,
            'StartedOn' => $this->StartedOn,
            'EndedOn' => $this->EndedOn,
            'IsActive' => $this->IsActive,
            'IsNotified' => $this->IsNotified,
            'IsLimited' => $this->IsLimited,
            'MinimumBasketAmount' => $this->MinimumBasketAmount,
            'MinimumBasketItemCount' => $this->MinimumBasketItemCount,
            'created_by' => $this->created_by,
            'LastUpdatedBy' => $this->LastUpdatedBy,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'GiftCardCode', $this->GiftCardCode])
            ->andFilterWhere(['like', 'SenderName', $this->SenderName])
            ->andFilterWhere(['like', 'SenderPhone', $this->SenderPhone])
            ->andFilterWhere(['like', 'SenderEmail', $this->SenderEmail])
            ->andFilterWhere(['like', 'SenderMessage', $this->SenderMessage])
            ->andFilterWhere(['like', 'RecipientName', $this->RecipientName])
            ->andFilterWhere(['like', 'RecipientPhone', $this->RecipientPhone])
            ->andFilterWhere(['like', 'RecipientEmail', $this->RecipientEmail])
            ->andFilterWhere(['like', 'Comment', $this->Comment]);

        return $dataProvider;
    }
}
