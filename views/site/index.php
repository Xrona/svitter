<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
    <?php foreach ($article as $item):  ?>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3><?= $item['article_name']; ?></h3>
                <br>
                <p><?= $item['article_text']; ?></p>
                <div style="float: right;"><?= $item['author']['user_last_name'] ?></div>
                <br style="clear: both">
                <hr>
            </div>
            <div class="col-lg-3"></div>

        </div>
    <?php  endforeach; ?>

    </div>
</div>
