<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Джей Фост | Стихи с запахом моря';
?>
<div class="site-index">
    <div class="main-block">
        <img src="<?= Yii::$app->homeUrl; ?>/img/jeyfost.png" />
        <div class="main-block-text">
            <div class="main-text">
                <h3><b>Стихи с запахом моря</b></h3>
                <p style="padding: 5px;">если бы можно было забрать с собой волны,<br />такие же, как в книгах жюль верна,<br />закат и причал —<br />я бы, наверное,<br />не стал забирать,<br />а просто бы не уезжал.</p>
            </div>
        </div>
    </div>
    <br /><br />
    <img src="<?= Yii::$app->homeUrl; ?>/img/news.png" class="center-block" />
    <br /><br />
    <div class="news-block">
        <div class="news-block-left">
            <?php foreach($news as $n): ?>

            <div class="news-entry" id="news<?= Html::encode($n->id) ?>"
                 onmouseover="changeNewsEntry('1', 'news<?= Html::encode($n->id) ?>', 'img<?= Html::encode($n->id) ?>', 'text<?= Html::encode($n->id) ?>')"
                 onmouseout="changeNewsEntry('0', 'news<?= Html::encode($n->id) ?>', 'img<?= Html::encode($n->id) ?>', 'text<?= Html::encode($n->id) ?>')"
            onclick="selectNews('news<?= Html::encode($n->id) ?>')">
                <img src="<?= Yii::$app->homeUrl; ?>/img/pencil_black.png" id="img<?= Html::encode($n->id) ?>" />
                <p id="text<?= Html::encode($n->id) ?>"><?php if(Html::encode($n->type) == "poem") {echo "Опубликовано новое стихотворение";} elseif(Html::encode($n->type) == "event") {echo "Запланированно новое событие";} ?></p>
            </div>
            <div style='width: 100%; height: 10px;'></div>

            <?php endforeach; ?>
        </div>
        <div style="width: 1px; height: 190px; background-color: #ddd; float: left;"></div>
        <div class="news-block-right"></div>
    </div>

</div>