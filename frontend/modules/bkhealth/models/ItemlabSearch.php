<?php

namespace frontend\modules\bkhealth\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\bkhealth\models\Itemlab;

/**
 * ItemlabSearch represents the model behind the search form about `frontend\modules\bkhealth\models\Itemlab`.
 */
class ItemlabSearch extends Itemlab
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'grouplab_id'], 'integer'],
            [['name', 'dafault'], 'safe'],
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
        $query = Itemlab::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'grouplab_id' => $this->grouplab_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'dafault', $this->dafault]);

        return $dataProvider;
    }
}
