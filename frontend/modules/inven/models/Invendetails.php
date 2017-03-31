<?php

namespace frontend\modules\inven\models;

use Yii;

/**
 * This is the model class for table "invendetails".
 *
 * @property integer $id
 * @property integer $main_id
 * @property integer $product_id
 * @property integer $qty
 * @property string $remark
 */
class Invendetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    const UPDATE_TYPE_CREATE = 'create';
    const UPDATE_TYPE_UPDATE = 'update';
    const UPDATE_TYPE_DELETE = 'delete';

    const SCENARIO_BATCH_UPDATE = 'batchUpdate';
 

    private $_updateType;

    public function getUpdateType()
    {
        if (empty($this->_updateType)) {
          if ($this->isNewRecord) {
                $this->_updateType = self::UPDATE_TYPE_CREATE;
            } else 
                $this->_updateType = self::UPDATE_TYPE_UPDATE;
            }
       
        return $this->_updateType;
    }
    

    public function setUpdateType($value)
    {
        $this->_updateType = $value;
    }
    
    public static function tableName()
    {
        return 'invendetails';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['updateType', 'required', 'on' => self::SCENARIO_BATCH_UPDATE],
            ['updateType',
                'in',
                'range' => [self::UPDATE_TYPE_CREATE, self::UPDATE_TYPE_UPDATE,  self::UPDATE_TYPE_DELETE],
                'on' => self::SCENARIO_BATCH_UPDATE]
            ,
            [['main_id', 'product_id', 'qty'], 'integer'],
            [['remark'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'main_id' => 'Main ID',
            'product_id' => 'รายการ',
            'qty' => 'จำนวน',
            'remark' => 'หมายเหตุ',
        ];
    }
}
