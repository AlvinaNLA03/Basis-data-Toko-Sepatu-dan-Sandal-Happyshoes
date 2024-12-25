<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BahanDasar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bahan-dasar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_bahan')->textInput() ?>

    <?= $form->field($model, 'nama_bahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bahan')->textInput() ?>

    <?= $form->field($model, 'id_supplier')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
