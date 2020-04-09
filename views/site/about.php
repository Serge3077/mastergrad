<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'ЭБАУТ ВЭ ПРОЖЭКТ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Этот проект создаётся энтузиастами-оленеводами из глуши магаданской области.<br>
        Мы искренне надеемся что эта хрень будет полезна Вам.<br>
        С уважением,<br>
        Оленеводы Магадана.
    </p>

    <code><?= __FILE__ ?></code>
</div>
