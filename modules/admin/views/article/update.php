<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $categoryList app\models\Article  */
/* @var $userList app\models\Article */
/* @var $tagList app\models\Article */

$this->title = 'Update article: #' . $model->id;

?>
<div class="article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categoryList' => $categoryList,
        'userList' => $userList,
        'tagList' => $tagList,
    ]) ?>

</div>
