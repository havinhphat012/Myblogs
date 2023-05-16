<?php

use backend\models\Post;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PostSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_post',
            'title',
            'description:ntext',
            'slug',
//            'id_user',
//            'id_comment',
            'category.title',
            'tag.title',
            [
                'attribute' => 'image',
                'value' => function (Post $model) {
                    return Html::img("/".$model->image,
                        ['width' => '150px', 'height' => '150px']);
                },
                'format' => 'raw'
            ],
            'user.username',
            'created_at:datetime',
            'updated_at:datetime',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Post $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_post' => $model->id_post]);
                }
            ],
        ],
    ]); ?>


</div>
