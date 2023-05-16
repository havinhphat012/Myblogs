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

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

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

    <?= $form->field($model, 'imageFile')->fileInput(); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
