<?php

namespace frontend\modules\bkhealth\models;

use Yii;

/**
 * This is the model class for table "resultlab".
 *
 * @property integer $id
 * @property string $code
 * @property string $value
 * @property string $default
 * @property string $result
 * @property string $consult
 * @property string $picconsult
 */
class Resultlab extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $icpic_img;
    
    public static function tableName()
    {
        return 'resultlab';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code'], 'required'],
            [['consult'], 'string'],
            [['grouplab_id'], 'integer'],
            [['code'], 'string', 'max' => 20],
            [['value', 'default', 'result', 'picconsult','name'], 'string', 'max' => 255],
            [['icpic_img'],'file','skipOnEmpty'=>'true','on'=>'update','extensions'=>'jpg,png']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'value' => 'ค่าแลป',
            'default' => 'ค่าปกติ',
            'result' => 'ผลแลป',
            'consult' => 'คำแนะนำ',
            'picconsult' => 'รูปภาพ',
            'icpic_img'=>'รูปภาพ',
        ];
    }
}
