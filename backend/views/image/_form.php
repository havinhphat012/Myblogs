<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Image $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="image-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'en',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]); ?>

    <div class="form-group">
        <label class="control-label" style="margin-bottom: 24px;"><?= $model->getAttributeLabel('imageFile') ?></label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="Post[imageFile]" id="validatedCustomFile">
            <label class="custom-file-label" for="validatedCustomFile">
                <?= $model->isNewRecord ? 'Choose A Picture' : $model->image ?>
            </label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
    </div>
    <?= $form->field($model, 'old_imageFile')->hiddenInput(['value' => $model->imageFile])->label(false) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
