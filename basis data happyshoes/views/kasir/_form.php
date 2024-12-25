<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Kasir $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kasir-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kasir')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_harga')->textInput() ?>

    <?= $form->field($model, 'id_produksi')->textInput() ?>

    <?= $form->field($model, 'id_transaksi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
