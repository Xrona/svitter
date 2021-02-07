<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use conquer\select2\Select2Widget;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
/* @var $categoryList app\models\Article */
/* @var $tagList app\models\Article */
/* @var $userlist app\models\Article */
?>

<div class="article-form">

<!--  fix small font widget select2  -->
<style type="text/css">*{font-size: 18px!important}</style>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'article_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'article_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model,'category_id')->widget(Select2Widget::className(), ['items' => $categoryList]) ?>

    <?= $form->field($model, 'tags')->widget(
        Select2Widget::className(),
        [
            'items' => $tagList,
            'multiple' => 'multiple'
        ])
    ?>

    <?= $form->field($model, 'author_id')->widget(Select2Widget::className(), ['items' => $userList]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
