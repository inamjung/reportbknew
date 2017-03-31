<?php

namespace frontend\modules\inven\models;

use Yii;

/**
 * This is the model class for table "invenmains".
 *
 * @property integer $id
 * @property string $date
 * @property integer $department_id
 * @property integer $user_id
 * @property string $create_at
 * @property string $update_at
 */
class Invenmains extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'invenmains';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'create_at', 'update_at'], 'safe'],
            [['department_id', 'user_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'วันที่เบิก',
            'department_id' => 'แผนก',
            'user_id' => 'ผู้บันทึก',
            'create_at' => 'วันที่บันทึก',
            'update_at' => 'Update At',
        ];
    }
    
    public function getMaindetail(){
        return $this->hasMany(Invendetails::className(), ['main_id'=>'id']);
    }
    public function getMaindep(){
        return $this->hasOne(Departments::className(), ['id'=>'department_id']);
    }
    public function getMainuser(){
        return $this->hasOne(\dektrium\user\models\User::className(), ['id'=>'user_id']);
    }
}
