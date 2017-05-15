<?php

namespace frontend\modules\bkhealth\models;

use Yii;

/**
 * This is the model class for table "bkopdscreen".
 *
 * @property string $Vstdate
 * @property string $Vn
 * @property string $Hn
 * @property string $Pt
 * @property string $Sex
 * @property string $Age_y
 * @property string $Clinic
 * @property string $Drugallergy
 * @property string $Pdx
 * @property string $Bpd
 * @property string $Bps
 * @property string $Bw
 * @property string $Cc
 * @property string $Drinking_type_id
 * @property string $Smoking_type_id
 * @property string $Hr
 * @property string $Pe
 * @property string $Pulse
 * @property string $Temperature
 * @property string $Height
 * @property string $Rr
 * @property string $Fbs
 * @property string $Bmi
 * @property string $Tg
 * @property string $Hdl
 * @property string $Glucurine
 * @property string $Bun
 * @property string $Creatinine
 * @property string $Ua
 * @property string $Hba1c
 * @property string $Tc
 * @property string $Ldl
 * @property string $Ast
 * @property string $Alt
 * @property string $Cholesterol
 * @property string $Waist
 * @property string $Pttype
 * @property string $Gfr_ckd
 * @property string $Wbc
 * @property string $Rbc
 * @property string $Alk
 * @property string $Eo
 * @property string $Hct
 * @property string $Dx_doctor
 * @property string $Dname
 * @property integer $ic_confirm
 * @property integer $ic_insys
 */
class Bkopdscreen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bkopdscreen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vstdate'], 'safe'],
            [['Vn'], 'required'],
            [['ic_confirm', 'ic_insys'], 'integer'],
            [['Pe'], 'string','max'=>500],
            [['Vstdate','Vn', 'Hn', 'Pt', 'Sex', 'Age_y', 'Clinic', 'Drugallergy', 'Pdx', 'Bpd', 'Bps', 'Bw', 'Cc', 'Drinking_type_id', 'Smoking_type_id', 'Hr','Pulse', 'Temperature', 'Height', 'Rr', 'Fbs', 'Bmi', 'Tg', 'Hdl', 'Glucurine', 'Bun', 'Creatinine', 'Ua', 'Hba1c', 'Tc', 'Ldl', 'Ast', 'Alt', 'Cholesterol', 'Waist', 'Pttype', 'Gfr_ckd', 'Wbc', 'Rbc', 'Alk', 'Eo', 'Hct', 'Dx_doctor', 'Dname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Vstdate' => 'Vstdate',
            'Vn' => 'Vn',
            'Hn' => 'Hn',
            'Pt' => 'Pt',
            'Sex' => 'Sex',
            'Age_y' => 'Age Y',
            'Clinic' => 'Clinic',
            'Drugallergy' => 'Drugallergy',
            'Pdx' => 'Pdx',
            'Bpd' => 'Bpd',
            'Bps' => 'Bps',
            'Bw' => 'Bw',
            'Cc' => 'Cc',
            'Drinking_type_id' => 'Drinking Type ID',
            'Smoking_type_id' => 'Smoking Type ID',
            'Hr' => 'Hr',
            'Pe' => 'Pe',
            'Pulse' => 'Pulse',
            'Temperature' => 'Temperature',
            'Height' => 'Height',
            'Rr' => 'Rr',
            'Fbs' => 'Fbs',
            'Bmi' => 'Bmi',
            'Tg' => 'Tg',
            'Hdl' => 'Hdl',
            'Glucurine' => 'Glucurine',
            'Bun' => 'Bun',
            'Creatinine' => 'Creatinine',
            'Ua' => 'Ua',
            'Hba1c' => 'Hba1c',
            'Tc' => 'Tc',
            'Ldl' => 'Ldl',
            'Ast' => 'Ast',
            'Alt' => 'Alt',
            'Cholesterol' => 'Cholesterol',
            'Waist' => 'Waist',
            'Pttype' => 'Pttype',
            'Gfr_ckd' => 'Gfr Ckd',
            'Wbc' => 'Wbc',
            'Rbc' => 'Rbc',
            'Alk' => 'Alk',
            'Eo' => 'Eo',
            'Hct' => 'Hct',
            'Dx_doctor' => 'Dx Doctor',
            'Dname' => 'Dname',
            'ic_confirm' => 'Ic Confirm',
            'ic_insys' => 'Ic Insys',
        ];
    }
}
