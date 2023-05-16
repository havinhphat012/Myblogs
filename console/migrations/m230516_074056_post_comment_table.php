<?php

use yii\db\Migration;

/**
 * Class m230516_074056_post_comment_table
 */
class m230516_074056_post_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('comment', 'id_post', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230516_074056_post_comment_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230516_074056_post_comment_table cannot be reverted.\n";

        return false;
    }
    */
}
