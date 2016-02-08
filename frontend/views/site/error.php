<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Такой страницы не существует :(';
?>
<div class="site-error">

    <div class="alert alert-danger">
        <span class="basicRed"><?= nl2br(Html::encode("Такой страницы не существует :(")) ?></span>
    </div>

    <p class="basic">Но, к счастью, на сайте есть другие интересные страницы. Например, <a href="poems"><span class="basicGreen">страница со стихами</span></a>.
        Попробуйте заглянуть туда, ведь вы находитесь на сайте, где живут стихи, а значит, вам нужно именно к ним :)</p>
    <br /><br />
    <center><a class="btn btn-lg btn-success" href="poems">перейти на страницу со стихами</a></center>

</div>
