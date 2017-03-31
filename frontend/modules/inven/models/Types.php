<?php

namespace frontend\modules\inven\models;

use Yii;

/**
 * This is the model class for table "types".
 *
 * @property integer $id
 * @property string $name
 */
class Types extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'name' => 'ประเภท',
        ];
    }
}
