<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m210205_105655_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'user_first_name' => $this->string()->notNull(),
            'user_last_name' => $this->string()->notNull(),
            'login' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'role' => $this->integer()->notNull(),
        ]);

        $this->insert('{{%user}}', [
            'user_first_name' => 'Ivanov',
            'user_last_name' => 'Ivan',
            'login' => 'ivanovi',
            'password' => 'qwerty',
            'role' => 0,
        ]);

        $this->insert('{{%user}}', [
            'user_first_name' => 'Petrov',
            'user_last_name' => 'Petya',
            'login' => 'petrperviy',
            'password' => '123456',
            'role' => 0,
        ]);

        $this->insert('{{%user}}', [
            'user_first_name' => 'Administrator',
            'user_last_name' => 'ad',
            'login' => 'admin',
            'password' => '1q4567',
            'role' => 1,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%user}}', ['id' => '*']);

        $this->dropTable('{{%user}}');
    }
}
