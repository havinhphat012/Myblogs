<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Tag $model */

$this->title = 'Update Tag: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id_tag' => $model->id_tag]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
