<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BahanDasarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bahan-dasar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_bahan') ?>

    <?= $form->field($model, 'nama_bahan') ?>

    <?= $form->field($model, 'jumlah_bahan') ?>

    <?= $form->field($model, 'id_supplier') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
