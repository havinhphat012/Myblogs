<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $image
 * @property string $created_at
 */
class Image extends \yii\db\ActiveRecord
{

    public $imageFile;
    public $old_imageFile;

    public function upload()
    {
//        $dir = Yii::getAlias('@backend/web/uploads/');
        $dir = 'uploads/';
        try {
            if ($this->validate()) {
                if (!is_dir($dir)) {
                    mkdir($dir);
                }
                if($this->imageFile){
                    $this->imageFile->saveAs($dir . $this->imageFile->baseName . '.' . $this->imageFile->extension);
                    $this->image = $dir . $this->imageFile->baseName . '.' . $this->imageFile->extension;
                }
                return true;
            } else {
                Yii::debug($this->errors);
                return false;
            }
        } catch (\Exception $exception){
            Yii::debug($exception);
        }
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */


    public function rules()
    {
        return [
            [['title', 'description', 'image'], 'required'],
            [['description'], 'string'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['title'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'created_at' => 'Created At',
        ];
    }
}
