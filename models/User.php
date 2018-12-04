<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $idUser
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $phone
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password', 'phone'], 'required'],
            [['name', 'email', 'password'], 'string', 'max' => 200],
            [['phone'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idUser' => 'Id User',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'phone' => 'Phone',
        ];
    }
}
