<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m230510_062621_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id_post' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'slug' => $this->string()->notNull(),
            'id_user' => $this->integer()->notNull(),
            'id_comment' => $this->integer()->notNull(),
            'id_category' => $this->integer()->notNull(),
            'id_tag' => $this->integer()->notNull(),
            'image' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
