<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Comment $model */

$this->title = 'Update Comment: ' . $model->id_comment;
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_comment, 'url' => ['view', 'id_comment' => $model->id_comment]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
