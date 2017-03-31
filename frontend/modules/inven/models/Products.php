<?php

namespace frontend\modules\inven\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $name
 * @property string $detail
 * @property integer $type_id
 * @property double $price
 * @property integer $qty
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'qty'], 'integer'],
            [['price'], 'number'],
            [['name', 'detail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'รายการ',
            'detail' => 'รายละเอียด',
            'type_id' => 'ประเภท',
            'price' => 'ราคา',
            'qty' => 'จำนวน',
        ];
    }
}
