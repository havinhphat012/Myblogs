<?php

namespace backend\controllers;

use backend\models\Post;
use backend\models\PostSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;


/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }


    /**
     * Lists all Post models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param int $id_post Id Post
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_post)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_post),
        ]);
    }

    public function actionSlug($slug)
    {
        $model = Post::find()->where(['slug' => $slug])->one();
        if (!is_null($model)) {
            return $this->render('view', [
                'model' => $model,
            ]);
        } else {
            return $this->redirect('/post/index');
        }
    }

    public function actionCategory($category)
    {
        $model = Post::find()
            ->innerJoinWith('category')
            ->where(['category.title' => $category])
            ->all();
        return $this->render('view_category', [
            'model' => $model,
        ]);
    }

    public function actionTag($tag)
    {
        $model = Post::find()
            ->innerJoinWith('tag')
            ->where(['tag.title' => $tag])
            ->all();
        return $this->render('view_tag', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|Response
     */
    public function actionCreate()
    {
        $model = new Post();

        if ($this->request->isPost) {

            if ($model->load($this->request->post())) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                if ($model->upload()) {
                    $model->save(false);
                    return $this->redirect(['view', 'id_post' => $model->id_post]);
                }
            } else {
                \Yii::debug($model->getErrors());

            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_post Id Post
     * @return string|Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_post)
    {
        $model = $this->findModel($id_post);

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->imageFile === null) {
                $model->imageFile = $model->old_imageFile;
            }
            if ($model->upload()) {
                $model->save(false);
                return $this->redirect(['view', 'id_post' => $model->id_post]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_post Id Post
     * @return Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_post)
    {
        $this->findModel($id_post)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_post Id Post
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_post)
    {
        if (($model = Post::findOne(['id_post' => $id_post])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

//
}
