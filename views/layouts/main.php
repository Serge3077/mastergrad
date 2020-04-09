<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Carousel;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-left',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Forum', 'url' => ['/site/forum']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
    <div class="row">
        <div class="container">
            <div class="carousel" height="100%" >
                <?php
                $carousel = [
                    [
                        'content' => '<img src="/uplds/carousel/4.jpeg" margin="auto"/>',
                        'caption' => '<h1>НЕШТЯГ</h1><p><a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcHmw5UkfNjL8Yu68iiJ8DwkxM32E7oKV8M6P3i0p-pAkbWBK7&s" class="btn btn-primary">Раскрыть тему сисек<span class="glyphicon glyphicon-chevron-right"></span></a> </p>',
                        'options' => []
                    ],
                    [
                        'content' => '<img src="/uplds/carousel/1.jpeg"margin="auto"/>',
                        'caption' => '<h1>Заголовок</h1><p>Это может быть как видео, так и последние статьи с картинками. Так будет интереснее.</p><p><a href="/article/link/1" class="btn btn-primary">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
                        'options' => []
                    ],
                    [
                        'content' => '<img src="/uplds/carousel/2.jpeg"margin="auto"/>',
                        'caption' => '',
                        'options' => []
                    ],
                    [
                        'content' => '<img src="/uplds/carousel/3.jpeg"margin="auto"/>',
                        'caption' => '',
                        'options' => ['class' => 'my-class']
                    ]
                ];
                echo Carousel::widget([
                    'items' => $carousel,
                    'options' => ['class' => 'carousel slide', 'data-interval' => '12000'],
                    'controls' => [
                        '<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
                        '<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
                    ]
                ]);
                ?>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
