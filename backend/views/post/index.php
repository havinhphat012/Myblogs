<?php

use backend\models\Post;
use yii\helpers\Html;
use yii\helpers\StringHelper;
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
            [
                'attribute'=>'description',
                'value' => function (Post $model) {
                    return StringHelper::truncateWords($model->description, 15, '...', true);
                },
                'format' => 'raw'
            ],
            'slug',
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
            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {update} {delete}',
                'buttons'=>[
                    'view' => function ($url, $model) {
                        return Html::a('view','post/slug/'.  $model->slug, ['title' => Yii::t('yii', 'View'),]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('update',['post/update','id_post' => $model->id_post], ['title' => Yii::t('yii', 'Update'),]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('delete',['post/delete','id_post' => $model->id_post], ['data-method' => 'POST'], ['title' => Yii::t('yii', 'Delete'),]);
                    },
                ],
            ],
        ],
    ]); ?>


</div>

