<?php

namespace app\models;
use yii\data\Pagination;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 *
 * @property Article[] $articles
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    /**
     * Gets query for [[Articles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::class, ['category_id' => 'id']);
    }
    public function getArticleTitles()
    {
        return implode(', ', array_map(function ($article) {
            return $article->title;
        }, $this->articles));
    }

    public function getArticlesCount()
    {
        return $this->getArticles()->count();

    }
    public static function getAll()
    {
        return Category::find()->all(); 
    }

    public static function getArticlesByCategory($id)
    {
        $query = Article::find()->where(['category_id' => $id]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 6]);
        

        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        
        $data ['articles'] = $articles;
        $data ['pagination'] = $pagination;
        
        return $data;
    }
}