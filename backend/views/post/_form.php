<?php

use backend\models\Category;
use backend\models\Tag;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Post $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

<!--    --><?php //= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

<!--    --><?php //= $form->field($model, 'id_user')->textInput() ?>

<!--    --><?php //= $form->field($model, 'id_comment')->textInput() ?>

    <?= $form->field($model, 'id_category')->dropDownList(
        ArrayHelper::map(Category::find()->all(), 'id_category', 'title'),
        [
            'prompt'=>'Select category',
        ]); ?>

    <?= $form->field($model, 'id_tag')->dropDownList(
        ArrayHelper::map(Tag::find()->all(), 'id_tag', 'title'),
        [
            'prompt'=>'Select tag',
        ]); ?>

<!--    --><?php //= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput(); ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
