<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $categoryList app\models\Article  */
/* @var $userList app\models\Article */
/* @var $tagList app\models\Article */

$this->title = 'Создать статью';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categoryList' => $categoryList,
        'userList' => $userList,
        'tagList' => $tagList,
    ]) ?>

</div>
