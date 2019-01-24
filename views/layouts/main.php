<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>     
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="nav-menu sticky-top">
        <div class="bg transition">
            <div class="container-fluid fixed">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/"><?= Html::img('@web/images/logo.png', ['alt' => 'Logo']) ?></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="ti-menu"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <?= Html::a('Employees', '/', ['class' => 'nav-link']) ?>                                        
                                    </li>
                                    <li>
                                        <?= Html::a(Html::tag('span', '', ['class' => 'ti-plus']).' Add employee', 'add-employee', ['class' => 'btn btn-outline-danger top-btn']) ?>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================= CONTENT =============================-->
    <?= $content ?>
    <!--//END CONTENT -->    
    <!--============================= FOOTER =============================-->
    <footer class="main-block gray">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 responsive-wrap">                    
                </div>
                <div class="col-md-4 responsive-wrap">
                    <div class="footer-logo_wrap">
                        <img src="images/footer-logo.png" alt="#" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 responsive-wrap">                    
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
