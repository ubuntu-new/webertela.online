<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Items;

/**
 * itemsSearch represents the model behind the search form of `app\modules\admin\models\Items`.
 */
class itemsSearch extends Items
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['img', 'title', 'description', 'title_ge', 'description_ge', 'iscolored', 'duration', 'director', 'production', 'country', 'created', 'visible', 'filterday', 'filterletter', 'filtercategory', 'starter', 'closer', 'bestff', 'bestffn', 'url', 'facebook'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Items::find();

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
            'created' => $this->created,
        ]);

        $query->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'title_ge', $this->title_ge])
            ->andFilterWhere(['like', 'description_ge', $this->description_ge])
            ->andFilterWhere(['like', 'iscolored', $this->iscolored])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'director', $this->director])
            ->andFilterWhere(['like', 'production', $this->production])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'visible', $this->visible])
            ->andFilterWhere(['like', 'filterday', $this->filterday])
            ->andFilterWhere(['like', 'filterletter', $this->filterletter])
            ->andFilterWhere(['like', 'filtercategory', $this->filtercategory])
            ->andFilterWhere(['like', 'starter', $this->starter])
            ->andFilterWhere(['like', 'closer', $this->closer])
            ->andFilterWhere(['like', 'bestff', $this->bestff])
            ->andFilterWhere(['like', 'bestffn', $this->bestffn])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'facebook', $this->facebook]);

        return $dataProvider;
    }
}
