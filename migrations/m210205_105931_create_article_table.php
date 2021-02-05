<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article}}`.
 */
class m210205_105931_create_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'article_name' => $this->string()->notNull(),
            'article_text' => $this->text()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'author_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-article-category_id',
            'article',
            'category_id'
        );

        $this->addForeignKey(
            'fk-article-category_id',
            'article',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-article-author_id',
            'article',
            'author_id'
        );

        $this->addForeignKey(
            'fk-article-author_id',
            'article',
            'author_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-article-category_id',
            'article'
        );

        $this->dropIndex(
            'idx_article-category_id',
            'article'
        );

        $this->dropForeignKey(
            'fk-article-author_id',
            'article'
        );

        $this->dropIndex(
            'idx-article-author_id',
            'article'
        );

        $this->dropTable('{{%article}}');
    }
}
