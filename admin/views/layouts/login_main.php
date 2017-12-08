<?php
use yii\helpers\Html;
use admin\assets\LoginAsset;
LoginAsset::register($this);
?>
<?php $this->beginPage();?>
<!DOCTYPE html>
<html lang="<?=  Yii::$app->language; ?>" class="no-js">
<head>
    <meta charset="<?= Yii::$app->charset; ?>">
    <title>Fullscreen Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?=Html::csrfMetaTags()?>
    <!-- CSS -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php $this->head(); ?>
</head>

<body>
<?php $this->beginBody();?>
<div class="page-container">
    <?= $content ?>
</div>

<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage(); ?>