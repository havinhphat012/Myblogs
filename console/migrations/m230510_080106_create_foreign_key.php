<?php

use yii\db\Migration;

/**
 * Class m230510_080106_create_foreign_key
 */
class m230510_080106_create_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        $this->addForeignKey(
//            'fk-post-id_user',
//            'post',
//            'id_user',
//            'user',
//            'id',
//            'CASCADE',
//            'CASCADE'
//        );


//        $this->addForeignKey(
//            'fk-post-id_category',
//            'post',
//            'id_category',
//            'category',
//            'id_category',
//            'CASCADE',
//            'CASCADE'
//        );

//        $this->addForeignKey(
//            'fk-post-id_tag',
//            'post',
//            'id_tag',
//            'tag',
//            'id_tag',
//            'CASCADE',
//            'CASCADE'
//        );

        $this->addForeignKey(
            'fk-comment-id_user',
            'comment',
            'id_user',
            'user',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230510_080106_create_foreign_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230510_080106_create_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
