<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Supplier $model */

$this->title = $model->id_supplier;
$this->params['breadcrumbs'][] = ['label' => 'Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="supplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_supplier' => $model->id_supplier], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_supplier' => $model->id_supplier], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_supplier',
            'nama',
            'kontak',
        ],
    ]) ?>

</div>
