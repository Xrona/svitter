<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create user', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'label' => 'First name',
                'attribute' => 'user_first_name'
            ],
            [
                'label' => 'Last name',
                'attribute' => 'user_last_name'
            ],
            'login',
            'password',
            [
                'label' => 'Role',
                'attribute' => 'role',
                'content' => function($data)
                {
                    return ($data == 1) ? "админ" : "пользователь";
                },
                'filter' => ['0' => 'пользователь','1' => 'админ']
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
