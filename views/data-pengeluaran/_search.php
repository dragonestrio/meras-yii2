<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DataPengeluaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-pengeluaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pengeluaran') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'timestamp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
