<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m200727_130559_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(11),
            'id_parent' => $this->integer(11)->defaultValue(null),
            'name' => $this->string(512)->defaultValue(null),
            'sort' => $this->integer(11)->defaultValue(null),
            'status' => $this->tinyInteger(1)->notNull()->defaultValue(1),
            'active_from' => $this->timestamp()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
