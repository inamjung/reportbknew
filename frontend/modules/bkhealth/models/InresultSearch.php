<?php

namespace frontend\modules\bkhealth\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\bkhealth\models\Inresult;

/**
 * InresultSearch represents the model behind the search form about `frontend\modules\bkhealth\models\Inresult`.
 */
class InresultSearch extends Inresult
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vstdate','Cid', 'Vn', 'Hn', 'Pt', 'Age_y','Cc' ,'Bp', 'Bp1', 'Waist', 'Waist1', 'Bmi', 'Bmi1', 'Fbs', 'Fbs1', 'Tg', 'Tg1', 'Hdl', 'Hdl1', 'Bun', 'Bun1', 'Creatinine', 'Creatinine1', 'Ldl', 'Ldl1', 'Ast', 'Ast1', 'Alt', 'Alt1', 'Cholesterol', 'Cholesterol1', 'Gfr_ckd', 'Gfr_ckd1', 'Hct_cbc', 'Hct_cbc1', 'Wbc_count_cbc', 'Wbc_count_cbc1', 'Eo_cbc', 'Eo_cbc1', 'Urine_proteine_ua', 'Urine_proteine_ua1', 'Urine_gluose_ua', 'Urine_gluose_ua1', 'Rbc_ua', 'Rbc_ua1', 'Wbc_ua', 'Wbc_ua1', 'Parasite', 'Parasite1', 'Occountblood', 'Occountblood1', 'Uric', 'Uric1','Sex'], 'safe'],
            [['ic_confirm', 'ic_insys', 'ic_report'], 'integer'],
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
        $query = Inresult::find();

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
            'ic_confirm' => $this->ic_confirm,
            'ic_insys' => $this->ic_insys,
            'ic_report' => $this->ic_report,
        ]);

        $query->andFilterWhere(['like', 'Vstdate', $this->Vstdate])
            ->andFilterWhere(['like', 'Cid', $this->Cid])
            ->andFilterWhere(['like', 'Vn', $this->Vn])
            ->andFilterWhere(['like', 'Hn', $this->Hn])
            ->andFilterWhere(['like', 'Pt', $this->Pt])
            ->andFilterWhere(['like', 'Age_y', $this->Age_y])
            ->andFilterWhere(['like', 'Cc', $this->Cc])
            ->andFilterWhere(['like', 'Bp', $this->Bp])
            ->andFilterWhere(['like', 'Bp1', $this->Bp1])
            ->andFilterWhere(['like', 'Waist', $this->Waist])
            ->andFilterWhere(['like', 'Waist1', $this->Waist1])
            ->andFilterWhere(['like', 'Bmi', $this->Bmi])
            ->andFilterWhere(['like', 'Bmi1', $this->Bmi1])
            ->andFilterWhere(['like', 'Fbs', $this->Fbs])
            ->andFilterWhere(['like', 'Fbs1', $this->Fbs1])
            ->andFilterWhere(['like', 'Tg', $this->Tg])
            ->andFilterWhere(['like', 'Tg1', $this->Tg1])
            ->andFilterWhere(['like', 'Hdl', $this->Hdl])
            ->andFilterWhere(['like', 'Hdl1', $this->Hdl1])
            ->andFilterWhere(['like', 'Bun', $this->Bun])
            ->andFilterWhere(['like', 'Bun1', $this->Bun1])
            ->andFilterWhere(['like', 'Creatinine', $this->Creatinine])
            ->andFilterWhere(['like', 'Creatinine1', $this->Creatinine1])
            ->andFilterWhere(['like', 'Ldl', $this->Ldl])
            ->andFilterWhere(['like', 'Ldl1', $this->Ldl1])
            ->andFilterWhere(['like', 'Ast', $this->Ast])
            ->andFilterWhere(['like', 'Ast1', $this->Ast1])
            ->andFilterWhere(['like', 'Alt', $this->Alt])
            ->andFilterWhere(['like', 'Alt1', $this->Alt1])
            ->andFilterWhere(['like', 'Cholesterol', $this->Cholesterol])
            ->andFilterWhere(['like', 'Cholesterol1', $this->Cholesterol1])
            ->andFilterWhere(['like', 'Gfr_ckd', $this->Gfr_ckd])
            ->andFilterWhere(['like', 'Gfr_ckd1', $this->Gfr_ckd1])
            ->andFilterWhere(['like', 'Hct_cbc', $this->Hct_cbc])
            ->andFilterWhere(['like', 'Hct_cbc1', $this->Hct_cbc1])
            ->andFilterWhere(['like', 'Wbc_count_cbc', $this->Wbc_count_cbc])
            ->andFilterWhere(['like', 'Wbc_count_cbc1', $this->Wbc_count_cbc1])
            ->andFilterWhere(['like', 'Eo_cbc', $this->Eo_cbc])
            ->andFilterWhere(['like', 'Eo_cbc1', $this->Eo_cbc1])
            ->andFilterWhere(['like', 'Urine_proteine_ua', $this->Urine_proteine_ua])
            ->andFilterWhere(['like', 'Urine_proteine_ua1', $this->Urine_proteine_ua1])
            ->andFilterWhere(['like', 'Urine_gluose_ua', $this->Urine_gluose_ua])
            ->andFilterWhere(['like', 'Urine_gluose_ua1', $this->Urine_gluose_ua1])
            ->andFilterWhere(['like', 'Rbc_ua', $this->Rbc_ua])
            ->andFilterWhere(['like', 'Rbc_ua1', $this->Rbc_ua1])
            ->andFilterWhere(['like', 'Wbc_ua', $this->Wbc_ua])
            ->andFilterWhere(['like', 'Wbc_ua1', $this->Wbc_ua1])
            ->andFilterWhere(['like', 'Parasite', $this->Parasite])
            ->andFilterWhere(['like', 'Parasite1', $this->Parasite1])
            ->andFilterWhere(['like', 'Occountblood', $this->Occountblood])
            ->andFilterWhere(['like', 'Occountblood1', $this->Occountblood1])
            ->andFilterWhere(['like', 'Sex', $this->Sex])     
            ->andFilterWhere(['like', 'Uric', $this->Uric])
            ->andFilterWhere(['like', 'Uric1', $this->Uric1]);

        return $dataProvider;
    }
}
