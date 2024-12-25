<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Produksi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_produksi')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_produksi')->textInput() ?>

    <?= $form->field($model, 'id_bahan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
