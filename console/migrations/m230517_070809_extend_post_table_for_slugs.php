<?php

use yii\db\Schema;

use yii\db\Migration;

/**
 * Class m230517_070809_extend_post_table_for_slugs
 */
class m230517_070809_extend_post_table_for_slugs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->addColumn('{{%post}}','slug',Schema::TYPE_STRING.' NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%post}}','slug');

        echo "m230517_070809_extend_post_table_for_slugs cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230517_070809_extend_post_table_for_slugs cannot be reverted.\n";

        return false;
    }
    */
}
