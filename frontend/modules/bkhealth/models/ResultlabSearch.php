<?php

namespace frontend\modules\bkhealth\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\bkhealth\models\Resultlab;

/**
 * ResultlabSearch represents the model behind the search form about `frontend\modules\bkhealth\models\Resultlab`.
 */
class ResultlabSearch extends Resultlab
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','grouplab_id'], 'integer'],
            [['code', 'value', 'default', 'result', 'consult', 'picconsult','name'], 'safe'],
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
        $query = Resultlab::find();

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

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'value', $this->value])
            ->andFilterWhere(['like', 'default', $this->default])
            ->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'consult', $this->consult])
            ->andFilterWhere(['like', 'name', $this->name])    
            ->andFilterWhere(['like', 'picconsult', $this->picconsult]);

        return $dataProvider;
    }
}
