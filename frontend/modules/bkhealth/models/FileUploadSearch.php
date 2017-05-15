<?php

namespace frontend\modules\bkhealth\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\bkhealth\models\FileUpload;

/**
 * FileUploadSearch represents the model behind the search form about `frontend\modules\bkhealth\models\FileUpload`.
 */
class FileUploadSearch extends FileUpload
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['debit_file', 'detail_file', 'upload_date'], 'safe'],
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
        $query = FileUpload::find();

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
            'upload_date' => $this->upload_date,
        ]);

        $query->andFilterWhere(['like', 'debit_file', $this->debit_file])
            ->andFilterWhere(['like', 'detail_file', $this->detail_file]);

        return $dataProvider;
    }
}
