<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Category';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="category">
    <h1><?= Html::encode($this->title) ?></h1>

    <div id="jstree"></div>
</div>
