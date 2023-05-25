<?php

use backend\models\Image;
use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\ImageSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Image', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            [
                'attribute'=>'description',
                'value' => function (Image $model) {
                    return StringHelper::truncateWords($model->description, 15, '...', true);
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'image',
                'value' => function (Image $model) {
                    return Html::img("/".$model->image,
                        ['width' => '150px', 'height' => '150px']);
                },
                'format' => 'raw'
            ],
            'created_at:datetime',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Image $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
