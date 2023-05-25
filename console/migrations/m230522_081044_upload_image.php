<?php

use yii\db\Migration;

/**
 * Class m230522_081044_upload_image
 */
class m230522_081044_upload_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230522_081044_upload_image cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230522_081044_upload_image cannot be reverted.\n";

        return false;
    }
    */
}
