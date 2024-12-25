<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Pelanggan $model */

$this->title = 'Create Pelanggan';
$this->params['breadcrumbs'][] = ['label' => 'Pelanggans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pelanggan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
