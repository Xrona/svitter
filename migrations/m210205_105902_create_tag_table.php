<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tag}}`.
 */
class m210205_105902_create_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tag}}', [
            'id' => $this->primaryKey(),
            'tag_name' => $this->string()->notNull()
        ]);

        $this->insert('{{%tag}}', [
           'tag_name' => 'popular'
        ]);

        $this->insert('{{%tag}}', [
           'tag_name' => 'interesting'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%tag}}', ['id' => '*']);

        $this->dropTable('{{%tag}}');
    }
}
