<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
 <h1><?= Html::encode($this->title) ?></h1>
   <div class="inputBlock">
            <div class="inputSecBlock">
                <div class="inp inp-firstName"><label for="login">Логин</label>
                    <input type="text" id="login" placeholder="Введите Логин">
                </div>
                <div class="answerBlock">&#42; Здесь ответ от программы</div>
            </div>
            <div class="inputSecBlock">
                <div class="inp inp-firstName"><label for="firstName">Имя</label>
                    <input type="text" id="firstName" placeholder="Введите Ваше имя">
                </div>
                <div class="answerBlock">&#42; Здесь ответ от программы</div>
            </div>
            <div class="inputSecBlock">
                <div class="inp inp-lastName"><label for="lastName">Фамилия</label>
                    <input type="text" id="lastName" placeholder="Введите Вашу фамилию">
                </div>
                <div class="answerBlock">&#42; Здесь ответ от программы</div>
            </div>
            <div class="inputSecBlock">
                <div class="inp inp-email"><label for="inMail">E-mail</label>
                    <input type="mail" id="inMail" placeholder="Введите e-mail">
                </div>
                <div class="answerBlock">&#42; Здесь ответ от программы</div>
            </div>
            <div class="inputSecBlock">
                <div class="inp inp-pass"><label for="pass">Пароль</label>
                    <input type="password" id="pass" placeholder="Введите пароль">
                </div>
                <div class="answerBlock">&#42; Здесь ответ от программы</div>
            </div>
            <div class="inputSecBlock">
                <div class="inp inp-passConf"><label for="passConf">Подтверждение парля</label>
                    <input type="password" id="passConf">
                </div>
                <div class="answerBlock">&#42; Здесь ответ от программы</div>
            </div>
            <div class="inputSecBlock">
                <div class="inp inp-tel"><label for="telefon">Телефон</label>
                    <input type="password" id="telefon" placeholder="Введите телефон в формате +7-111-222-33-44">
                </div>
                <div class="answerBlock">&#42; Здесь ответ от программы</div>
            </div>
            <div class="buttonBlock">
                <button class="button buttonSub" type="submit"> <span>Отправить</span></button>
                <button class="button buttonAutorize" type="button"><a href="autorization.html">
                        <span>Авторизация</span></a></button>
            </div>
        </div>


<div class="site-login">
   

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"offset-lg-1 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="offset-lg-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="offset-lg-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>
