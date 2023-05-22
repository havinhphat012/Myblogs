<?php

use backend\models\Category;
use backend\models\Tag;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/** @var yii\web\View $this */
/** @var backend\models\Post $model */
/** @var yii\widgets\ActiveForm $form */
?>

    <div class="post-form">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'title')->textInput(); ?>

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

        <?= $form->field($model, 'id_category')->dropDownList(
            ArrayHelper::map(Category::find()->all(), 'id_category', 'title'),
            [
                'prompt' => 'Select category',
            ]); ?>

        <?= $form->field($model, 'id_tag')->dropDownList(
            ArrayHelper::map(Tag::find()->all(), 'id_tag', 'title'),
            [
                'prompt' => 'Select tag',
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
<?php
$this->registerCss('.custom-file-input ~ .custom-file-label::after {
    content: "Button Text";
}');
