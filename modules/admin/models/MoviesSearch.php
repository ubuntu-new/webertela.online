<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Movies;

/**
 * MoviesSearch represents the model behind the search form of `app\modules\admin\models\Movies`.
 */
class MoviesSearch extends Movies
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'year', 'filterday', 'section', 'country', 'author'], 'integer'],
            [['title_ge', 'title', 'director', 'duration', 'production', 'iscolored', 'description_ge', 'description', 'image', 'main_image', '_video', 'date', 'date_released', 'link_ge', 'link_en', 'time', 'filtercategory', 'filterletter', 'starter', 'closer', 'bestff', 'bestffn', 'visible'], 'safe'],
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
        $query = Movies::find();

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
            'date' => $this->date,
            'year' => $this->year,
            'filterday' => $this->filterday,
            'section' => $this->section,
            'country' => $this->country,
            'author' => $this->author,
        ]);

        $query->andFilterWhere(['like', 'title_ge', $this->title_ge])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'director', $this->director])
            ->andFilterWhere(['like', 'duration', $this->duration])
            ->andFilterWhere(['like', 'production', $this->production])
            ->andFilterWhere(['like', 'iscolored', $this->iscolored])
            ->andFilterWhere(['like', 'description_ge', $this->description_ge])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'main_image', $this->main_image])
            ->andFilterWhere(['like', '_video', $this->_video])
            ->andFilterWhere(['like', 'date_released', $this->date_released])
            ->andFilterWhere(['like', 'link_ge', $this->link_ge])
            ->andFilterWhere(['like', 'link_en', $this->link_en])
            ->andFilterWhere(['like', 'time', $this->time])
            ->andFilterWhere(['like', 'filtercategory', $this->filtercategory])
            ->andFilterWhere(['like', 'filterletter', $this->filterletter])
            ->andFilterWhere(['like', 'starter', $this->starter])
            ->andFilterWhere(['like', 'closer', $this->closer])
            ->andFilterWhere(['like', 'bestff', $this->bestff])
            ->andFilterWhere(['like', 'bestffn', $this->bestffn])
            ->andFilterWhere(['like', 'visible', $this->visible]);

        return $dataProvider;
    }
}
