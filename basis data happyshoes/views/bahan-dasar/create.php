<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BahanDasar $model */

$this->title = 'Create Bahan Dasar';
$this->params['breadcrumbs'][] = ['label' => 'Bahan Dasars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahan-dasar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
