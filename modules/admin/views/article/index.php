<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Articles';

?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('New Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'article_name',
            'article_text:ntext',
            [
                'class' => yii\grid\DataColumn::className(),
                'label' => 'Category',
                'attribute' => 'category_id',
                'content' =>  function($data){
                    return $data->category->category_name;
                },
                'filter' => $categoryList

            ],
            [
                'class' => yii\grid\DataColumn::className(),
                'label' => 'Tags',
                'attribute' => 'tags',
                'content' => function($data){
                    return implode('; ',\yii\helpers\ArrayHelper::getColumn($data->getTags()->select('tag_name')->asArray()->all(),'tag_name'));
                },
                'filter' => $tagList

            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
