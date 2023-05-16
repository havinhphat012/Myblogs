<?php

namespace backend\models;

use common\models\User;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for table "post".
 *
 * @property int $id_post
 * @property string $title
 * @property string|null $description
 * @property string $slug
 * @property int $id_user
 * @property int $id_comment
 * @property int $id_category
 * @property int $id_tag
 * @property string $image
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Category $category
 * @property Comment $comment
 * @property Tag $tag
 * @property User $user
 */
class Post extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::class,
                'attribute' => 'title',
                // 'slugAttribute' => 'slug',
            ],
            [
                'class' => BlameableBehavior::class,
                'createdByAttribute' => 'id_user',
                'updatedByAttribute' => false
                // 'slugAttribute' => 'slug',
            ],
            [
                'class' => TimestampBehavior::class,
            ],
        ];
    }

    public $imageFile;

    public function upload()
    {
//        $dir = Yii::getAlias('@backend/web/uploads/');
        $dir = '/uploads/';
        if ($this->validate()) {
            if (!is_dir($dir)){
                mkdir($dir);
            }
            $this->imageFile->saveAs($dir . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $this->image = $dir . $this->imageFile->baseName . '.' . $this->imageFile->extension;
            return true;
        } else {
            Yii::debug($this->errors);
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','description', 'id_category', 'id_tag'], 'required'],
            [['description'], 'string'],
            [['id_user', 'id_comment', 'id_category', 'id_tag'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'slug', 'image'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['id_category' => 'id_category']],
            [['id_tag'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::class, 'targetAttribute' => ['id_tag' => 'id_tag']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_post' => 'Id Post',
            'title' => 'Title',
            'description' => 'Description',
            'slug' => 'Slug',
            'id_user' => 'Id User',
            'id_comment' => 'Id Comment',
            'id_category' => 'Id Category',
            'id_tag' => 'Id Tag',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'file' => 'Image'
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id_category' => 'id_category']);
    }

    /**
     * Gets query for [[Tag]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(Tag::class, ['id_tag' => 'id_tag']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
