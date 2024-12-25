<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KasirSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kasir-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_kasir') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'total_harga') ?>

    <?= $form->field($model, 'id_produksi') ?>

    <?= $form->field($model, 'id_transaksi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
