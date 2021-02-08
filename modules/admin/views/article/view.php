<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $tagNameList app\models\Article */

$this->title = $model->article_name;

$tagNameList = ArrayHelper::getColumn($model->getTags()->select('tag_name')->asArray()->all(), 'tag_name');

\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'article_name',
            'article_text',
            'category.category_name',
            [
                'label' => 'Tags',
                'value' => implode(', ', $tagNameList),
            ],
            [
                'label' => 'Author',
                'value' => $model->author->user_last_name,
            ],

        ],

    ]);
    ?>

</div>
