<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ViewMahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="view-mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'jurusan') ?>

    <?= $form->field($model, 'semester') ?>

    <?php // echo $form->field($model, 'jenis_kel') ?>

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'kelas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
