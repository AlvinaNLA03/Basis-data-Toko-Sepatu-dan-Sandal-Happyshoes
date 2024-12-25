<?php

use app\models\Produksi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\ProduksiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Produksis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Produksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_produksi',
            'status',
            'tanggal_produksi',
            'id_bahan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Produksi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_produksi' => $model->id_produksi]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>