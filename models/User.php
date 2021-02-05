<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $user_first_name
 * @property string $user_last_name
 * @property string $login
 * @property string $password
 * @property int $role
 *
 * @property Article[] $articles
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_first_name', 'user_last_name', 'login', 'password', 'role'], 'required'],
            [['role'], 'integer'],
            [['user_first_name', 'user_last_name', 'login', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_first_name' => 'User First Name',
            'user_last_name' => 'User Last Name',
            'login' => 'Login',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }

    /**
     * Gets query for [[Articles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Article::className(), ['author_id' => 'id']);
    }
}
