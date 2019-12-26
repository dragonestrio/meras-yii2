<?php
use app\models\DataMahasiswa;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\DataKas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-kas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->widget(Select2::classname(), [
    	'data' => ArrayHelper::map(DataMahasiswa::find()->select(['nim','nama'])->all(), 'nim', 'nama'),
    	'id' => 'nim',
    	'class' => 'form-control inline-block',
    	'options' => ['placeholder' => '- Select Mahasiswa From NIM -'],
    	'pluginOptions' => [
    		'allowClear' => true
    	],
    ]); 
    ?>

    <?= $form->field($model, 'setor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
