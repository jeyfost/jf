<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контактная информация';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1 class="site-contact">

    <h3>По вопросам сотрудничества или организации вечеров обращайтесь по одной из указанных ниже ссылок или отправляйте письмо через форму.</h3>
    <br />

    <ul>
        <a href="https://vk.com/jeyfost" target="_blank"><li><span class="basicGreen">Личная страница VK</span></li></a>
        <a href="https://vk.com/jey_fost" target="_blank"><li><span class="basicGreen">Официальная группа VK</span></li></a>
        <a href="http://stihi.ru/avtor/jeyfost" target="_blank"><li><span class="basicGreen">Страница на Стихи.ру</span></li></a>
        <a href="mailto:jeyfost@aol.com"><li><span class="basicGreen">Личная почта: jeyfost@aol.com</span></li></a>
    </ul>

    <br />
    <div style="width: 100%; height: 1px; background-color: #d0d0b5;"></div>
    <br />

    <h1>Форма обратной связи</h1>
    <br />
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'name') ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'subject') ?>

            <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>

            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Отпраить письмо', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
