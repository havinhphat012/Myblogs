<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Comment $model */

$this->title = $model->id_comment;
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="comment-view">

    <h1><?= Html::encode($this->title) ?></h1>

<!--    <p>-->
<!--        --><?php //= Html::a('Update', ['update', 'id_comment' => $model->id_comment], ['class' => 'btn btn-primary']) ?>
<!--        --><?php //= Html::a('Delete', ['delete', 'id_comment' => $model->id_comment], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Are you sure you want to delete this item?',
//                'method' => 'post',
//            ],
//        ]) ?>
<!--    </p>-->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id_user',
            'content',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
