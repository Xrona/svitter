<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m210205_105849_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'category_name' => $this->string()->notNull(),
        ]);

        $this->insert('{{%category}}', [
            'category_name' => 'Books',
        ]);

        $this->insert('{{%category}}', [
            'category_name' => 'journals',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%category}}', ['id' => '*']);

        $this->dropTable('{{%category}}');
    }
}
