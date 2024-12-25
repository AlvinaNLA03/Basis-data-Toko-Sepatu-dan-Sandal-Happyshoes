<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BahanDasar $model */

$this->title = 'Update Bahan Dasar: ' . $model->id_bahan;
$this->params['breadcrumbs'][] = ['label' => 'Bahan Dasars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bahan, 'url' => ['view', 'id_bahan' => $model->id_bahan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bahan-dasar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
