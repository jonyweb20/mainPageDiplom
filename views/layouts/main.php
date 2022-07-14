<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

use app\models\Product;  

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\Product */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <script src="https://kit.fontawesome.com/41741927f5.js" crossorigin="anonymous"></script>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container1">

<header>
<!--    --><?php
/*    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Каталог', 'url' => ['/site/catalog']],
            ['label' => 'Доставка', 'url' => ['/site/contact']],
            ['label' => 'Оплата', 'url' => ['/site/about']],
            ['label' => 'Гарантия', 'url' => ['/site/garant']],
            ['label' => 'Поиск', 'url' => ['/site/contact']],

            '<div class="right">',

            ['label' => 'Избр', 'url' => ['/site/contact'], 'options'=> ['class' => 'a-solid fa-star']],
            ['label' => 'Корз', 'url' => ['/site/contact'], 'options'=> ['class' => 'a-solid fa-basket-shopping']],

            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li></div>'
            )
        ],
    ]);
    NavBar::end();
    */?>
    <nav class="navbar-avant">
        <div class="container-nav">
            <div class="navbar-brand ">
                <svg viewBox="0 0 300 80" xmlns="http://www.w3.org/2000/svg">
                    <text x="100" y="55" class="Rrrrr" dominant-baseline="text-after-edge">Avantie</text>
                </svg>
            </div>
            <div class="navbar-menuDropdown">
                <ul id="navbarDropMenu" class="navbarPrime navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.html"><i class="fa-solid fa-house"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <?php Yii::$app->getUrlManager()->createUrl(['site/catalog']);
                        echo '<a class="nav-link" href="'. Yii::$app->urlManager->createUrl(['site/catalog']).'" id="catMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Каталог</a>';

                        ?>

                       
                        <ul class="dropdown-menu" aria-labelledby="catMenuLink">
                            <li><a class="dropdown-item" href="#">Мужские</a></li>
                            <li><a class="dropdown-item" href="#">Женские</a></li>
                            <li><a class="dropdown-item" href="#">Детские</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Доставка</a>
                    </li>
                    <li class="nav-item">
                       <?php Yii::$app->getUrlManager()->createUrl(['site/garant']);
                        echo '<a class="nav-link" href="'. Yii::$app->urlManager->createUrl(['site/contact']).'" >Контакты</a>';
?>
                       
                    </li>
                    <li class="nav-item">
                        <?php Yii::$app->getUrlManager()->createUrl(['site/garant']);
                        echo '<a class="nav-link" href="'. Yii::$app->urlManager->createUrl(['site/garant']).'" >Гарантия</a>';

                        ?>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <input type="text" class="search" id="search">
                    </li>
                </ul>
            </div>
            <div class="navbarUser">
                <ul class="navbar-nav navUserList">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-star"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-basket-shopping"></i></a>
                    </li>
                    <li class="nav-item">
                        <?php Yii::$app->getUrlManager()->createUrl(['site/login']);
                        echo '<a class="nav-link" href="'. Yii::$app->urlManager->createUrl(['site/login']).'" ><i class="fa-brands fa-jenkins"></i></a>';
                        ?>
                    </li>
                </ul>
            </div>
            <div class="navbar-menuIcon">
                <a href="#"><i class="fa-solid fa-bars"></i></a>
            </div>
        </div>
    </nav>
</header>

    <main role="main" class="flex-shrink-0">
        <div class="container-bc">
            <?= Breadcrumbs::widget([
                'homeLink' => ['label' => 'Главная ', 'url' => Yii::$app->homeUrl],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <div class="breadcrumb-phone">
                <input type="checkbox" id="checkIcon">
                <label class="labelPhone" for="checkIcon">
                    <i class="fa-solid fa-phone"></i>
                </label>
                <div class="phoneNumber">
                    <a href="#">89039065561</a>
                    <a href="#">83833555555</a>
                </div>
            </div>
        </div>
        <div class="container2">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer>
        <div class="boxSocialIcons">
            <div class="boxSocialIcons-instagram"><a href="#"><i class="fa-brands fa-instagram instagram"></i></a></div>
            <div class="boxSocialIcons-twitter"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
            <div class="boxSocialIcons-vk"><a href="#"><i class="fa-brands fa-vk"></i></a></div>
            <div class="boxSocialIcons-facebook"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
            <div class="boxSocialIcons-telegram"><a href="#"><i class="fa-regular fa-paper-plane"></i></a></div>
            <div class="boxSocialIcons-youtube">
                <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
        <div class="footerInfo">&copy; SH-EVG</div>
        <div class="footerZnak"><a href='https://www.freepik.com/vectors/background'>BG created by upklyak</a></div>
    </footer>

</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
