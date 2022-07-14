<?php

/* @var $this yii\web\View */
/* @var $product app\models\Product */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <?= '<p>'.$product->colorframe.'</p>'; ?>

    <code><?= __FILE__ ?></code>
</div>
