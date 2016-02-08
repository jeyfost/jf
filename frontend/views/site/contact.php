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
<div class="site-contact">
    <br />

    <h3>По вопросам сотрудничества или организации вечеров обращайтесь по одной из указанных ниже ссылок или отправляйте письмо через форму.</h3>

    <ul>
        <a href="https://vk.com/jeyfost"><li>Личная страница VK</li></a>
        <a href="https://vk.com/jey_fost"><li>Официальная группа VK</li></a>
        <a href="https://vk.com/jeyfost"><li>Страница на Стихи.ру</li></a>
        <a href="https://vk.com/jeyfost"><li>Личная почта: jeyfost@aol.com</li></a>
    </ul>

    <br /><br />

    <h2>Форма обратной связи</h2>
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
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
