<?php

use yii\db\Migration;

/**
 * Class m230515_063118_post_slug
 */
class m230515_063118_post_slug extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post', 'slug', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230515_063118_post_slug cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230515_063118_post_slug cannot be reverted.\n";

        return false;
    }
    */
}
