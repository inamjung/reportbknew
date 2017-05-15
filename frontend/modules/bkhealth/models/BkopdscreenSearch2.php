<?php

namespace frontend\modules\bkhealth\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\bkhealth\models\Bkopdscreen;

/**
 * BkopdscreenSearch represents the model behind the search form about `frontend\modules\bkhealth\models\Bkopdscreen`.
 */
class BkopdscreenSearch extends Bkopdscreen
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vstdate', 'Vn', 'Hn', 'Pt', 'Sex', 'Age_y', 'Clinic', 'Drugallergy', 'Pdx', 'Bpd', 'Bps', 'Bw', 'Cc', 'Drinking_type_id', 'Smoking_type_id', 'Hr', 'Pe', 'Pulse', 'Temperature', 'Height', 'Rr', 'Fbs', 'Bmi', 'Tg', 'Hdl', 'Glucurine', 'Bun', 'Creatinine', 'Ua', 'Hba1c', 'Tc', 'Ldl', 'Ast', 'Alt', 'Cholesterol', 'Waist', 'Pttype', 'Gfr_ckd', 'Wbc', 'Rbc', 'Alk', 'Eo', 'Hct', 'Dx_doctor', 'Dname'], 'safe'],
            [['ic_confirm', 'ic_insys'], 'integer'],
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
        $query = Bkopdscreen::find();

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
            'Vstdate' => $this->Vstdate,
            'ic_confirm' => $this->ic_confirm,
            'ic_insys' => $this->ic_insys,
        ]);

        $query->andFilterWhere(['like', 'Vn', $this->Vn])
            ->andFilterWhere(['like', 'Hn', $this->Hn])
            ->andFilterWhere(['like', 'Pt', $this->Pt])
            ->andFilterWhere(['like', 'Sex', $this->Sex])
            ->andFilterWhere(['like', 'Age_y', $this->Age_y])
            ->andFilterWhere(['like', 'Clinic', $this->Clinic])
            ->andFilterWhere(['like', 'Drugallergy', $this->Drugallergy])
            ->andFilterWhere(['like', 'Pdx', $this->Pdx])
            ->andFilterWhere(['like', 'Bpd', $this->Bpd])
            ->andFilterWhere(['like', 'Bps', $this->Bps])
            ->andFilterWhere(['like', 'Bw', $this->Bw])
            ->andFilterWhere(['like', 'Cc', $this->Cc])
            ->andFilterWhere(['like', 'Drinking_type_id', $this->Drinking_type_id])
            ->andFilterWhere(['like', 'Smoking_type_id', $this->Smoking_type_id])
            ->andFilterWhere(['like', 'Hr', $this->Hr])
            ->andFilterWhere(['like', 'Pe', $this->Pe])
            ->andFilterWhere(['like', 'Pulse', $this->Pulse])
            ->andFilterWhere(['like', 'Temperature', $this->Temperature])
            ->andFilterWhere(['like', 'Height', $this->Height])
            ->andFilterWhere(['like', 'Rr', $this->Rr])
            ->andFilterWhere(['like', 'Fbs', $this->Fbs])
            ->andFilterWhere(['like', 'Bmi', $this->Bmi])
            ->andFilterWhere(['like', 'Tg', $this->Tg])
            ->andFilterWhere(['like', 'Hdl', $this->Hdl])
            ->andFilterWhere(['like', 'Glucurine', $this->Glucurine])
            ->andFilterWhere(['like', 'Bun', $this->Bun])
            ->andFilterWhere(['like', 'Creatinine', $this->Creatinine])
            ->andFilterWhere(['like', 'Ua', $this->Ua])
            ->andFilterWhere(['like', 'Hba1c', $this->Hba1c])
            ->andFilterWhere(['like', 'Tc', $this->Tc])
            ->andFilterWhere(['like', 'Ldl', $this->Ldl])
            ->andFilterWhere(['like', 'Ast', $this->Ast])
            ->andFilterWhere(['like', 'Alt', $this->Alt])
            ->andFilterWhere(['like', 'Cholesterol', $this->Cholesterol])
            ->andFilterWhere(['like', 'Waist', $this->Waist])
            ->andFilterWhere(['like', 'Pttype', $this->Pttype])
            ->andFilterWhere(['like', 'Gfr_ckd', $this->Gfr_ckd])
            ->andFilterWhere(['like', 'Wbc', $this->Wbc])
            ->andFilterWhere(['like', 'Rbc', $this->Rbc])
            ->andFilterWhere(['like', 'Alk', $this->Alk])
            ->andFilterWhere(['like', 'Eo', $this->Eo])
            ->andFilterWhere(['like', 'Hct', $this->Hct])
            ->andFilterWhere(['like', 'Dx_doctor', $this->Dx_doctor])
            ->andFilterWhere(['like', 'Dname', $this->Dname]);

        return $dataProvider;
    }
}
