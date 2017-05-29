<?php

namespace frontend\modules\bkhealth\models;

use Yii;

/**
 * This is the model class for table "itemlab".
 *
 * @property integer $id
 * @property string $name
 * @property string $dafault
 * @property integer $grouplab_id
 */
class Itemlab extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itemlab';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grouplab_id'], 'integer'],
            [['name', 'dafault'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'dafault' => 'Dafault',
            'grouplab_id' => 'Grouplab ID',
        ];
    }
    
//    public function getItemfbs(){
//        return $this->hasMany(Insys::className(), ['Fbs'=>'name']);
//    }
}
