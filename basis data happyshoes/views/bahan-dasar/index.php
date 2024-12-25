<?php

use app\models\BahanDasar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\BahanDasarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bahan Dasars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bahan-dasar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bahan Dasar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bahan',
            'nama_bahan',
            'jumlah_bahan',
            'id_supplier',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BahanDasar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_bahan' => $model->id_bahan]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
