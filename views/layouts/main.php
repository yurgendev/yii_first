<?php

/** @var yii\web\View $this */
/** @var string $content */


use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;


PublicAsset::register($this);
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <nav class="navbar main-menu navbar-default">
        <div class="container">
            <div class="menu-content">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/public/images/logo.jpg" alt=""></a>
                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav text-uppercase">
                        <li><a data-toggle="dropdown" class="dropdown-toggle" href="/">Home</a>

                        </li>
                    </ul>
                    <div class="i_con">
                        <ul class="nav navbar-nav text-uppercase">
                            <?php if (Yii::$app->user->isGuest): ?>
                                <li><a href="<?= Url::toRoute(['auth/login']) ?>">Login</a></li>
                                <li><a href="<?= Url::toRoute(['auth/signup']) ?>">Register</a></li>
                            <?php else: ?>
                                <?= Html::beginForm(['/auth/logout'], 'post')
                                    . Html::submitButton(
                                        'Logout (' . Yii::$app->user->identity->name . ')',
                                        ['class' => 'btn btn-link logout', 'style' => "padding-top:10px;"]
                                    )
                                    . Html::endForm() ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!--main content start-->
    <?= $content ?>
    <!-- end main content-->
    <!--footer start-->


    <?= $this->render('_footer') ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>