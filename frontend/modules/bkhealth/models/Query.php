<?php

namespace frontend\modules\bkhealth\models;

use Yii;

/**
 * This is the model class for table "query".
 *
 * @property integer $id
 * @property string $name
 * @property string $sql
 * @property integer $user_id
 * @property string $createdate
 */
class Query extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'query';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sql'], 'string'],
            [['user_id'], 'integer'],
            [['createdate'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อ คิวรี',
            'sql' => 'คำสั่ง Sql',
            'user_id' => 'User ID',
            'createdate' => 'Createdate',
        ];
    }
}
