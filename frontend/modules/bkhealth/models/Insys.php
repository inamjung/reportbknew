<?php

namespace frontend\modules\bkhealth\models;

use Yii;
use frontend\modules\bkhealth\models\Pttype;
/**
 * This is the model class for table "insys".
 *
 * @property string $Vstdate
 * @property string $Vn
 * @property string $Hn
 * @property string $Pt
 * @property string $Sex
 * @property string $Age_y
 * @property string $Pttype
 * @property string $Clinic
 * @property string $Drugallergy
 * @property string $Pdx
 * @property string $Height
 * @property string $Bw
 * @property string $Waist
 * @property string $Cc
 * @property string $Bpd
 * @property string $Bps
 * @property string $Drinking_type_id
 * @property string $Smoking_type_id
 * @property string $Hr
 * @property string $Pe
 * @property string $Pulse
 * @property string $Temperature
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
 * @property string $Gfr_ckd
 * @property string $Hct_cbc
 * @property string $Wbc_count_cbc
 * @property string $Eo_cbc
 * @property string $Urine_proteine_ua
 * @property string $Urine_gluose_ua
 * @property string $Rbc_ua
 * @property string $Wbc_ua
 * @property string $Parasite
 * @property string $Occountblood
 * @property string $Dx_doctor
 * @property string $Dname
 * @property integer $ic_confirm
 * @property integer $ic_insys
 */
class Insys extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $Waist1;
    public $Bmi1;
    public $Tg1;
    public $Hdl1;
    public $Creatinine1;
    public $Ldl1;
    public $Cholesterol1;
    public $Gfr_ckd1;
    public $Hct_cbc1;
    public $Wbc_count_cbc1;
    public $Eo_cbc1;
    public $Urine_proteine_ua1;
    public $Urine_gluose_ua1;
    public $Uric1;
    public $Ast1;
    public $Alt1;
    public $Bp1;
    public $Fbs1;
    
    public static function tableName()
    {
        return 'insys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vn'], 'required'],
            [['ic_confirm', 'ic_insys','ic_report'], 'integer'],
            [['Bmi1','Waist1','Tg1','Hdl1','Creatinine1','Ldl1','Cholesterol1','Gfr_ckd1'
               ,'Hct_cbc1','Wbc_count_cbc1','Eo_cbc1','Urine_proteine_ua1','Urine_gluose_ua1','Uric1','Bp1' 
               ,'Fbs1' ,'Vstdate', 'Vn', 'Hn', 'Pt', 'Sex', 'Age_y', 'Pttype', 'Clinic', 'Drugallergy', 'Pdx', 'Height', 'Bw', 'Waist', 'Cc', 'Bp','Bpd', 'Bps', 'Drinking_type_id', 'Smoking_type_id', 'Hr', 'Pe', 'Pulse', 'Temperature', 'Rr', 'Fbs',  'Tg', 'Hdl', 'Glucurine', 'Bun', 'Creatinine', 'Ua', 'Hba1c', 'Tc', 'Ldl', 'Ast', 'Alt', 'Cholesterol', 'Gfr_ckd', 'Hct_cbc', 'Wbc_count_cbc', 'Eo_cbc', 'Urine_proteine_ua', 'Urine_gluose_ua', 'Rbc_ua', 'Wbc_ua', 'Parasite', 'Occountblood', 'Uric','Dx_doctor', 'Dname'], 'string', 'max' => 255],
            [['Bmi'], 'number'],
            [['Cid'],'string', 'max' => 13]
            ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Vstdate' => 'วันที่ตรวจ',
            'Cid'=>'Cid',
            'Vn' => 'Vn',
            'Hn' => 'Hn',
            'Pt' => 'ชื่อ-สกุล',
            'Sex' => 'เพศ',
            'Age_y' => 'อายุ',
            'Pttype' => 'สิทธิบัตร',
            'Clinic' => 'โรคประจำตัว',
            'Drugallergy' => 'ประวัติแพ้ยา',
            'Pdx' => 'รหัสโรค',
            'Height' => 'ส่วนสูง',
            'Bw' => 'น้ำหนัก',
            'Waist' => 'รอบเอว',
            'Cc' => 'ซักประวัติ',
            'Bpd' => 'Bpd',
            'Bps' => 'Bps',
            'Drinking_type_id' => 'สุรา',
            'Smoking_type_id' => 'บุหรี่',
            'Hr' => 'Hr',
            'Pe' => 'Pe',
            'Pulse' => 'Pulse',
            'Temperature' => 'Temperature',
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
            'Gfr_ckd' => 'Gfr Ckd',
            'Hct_cbc' => 'Hct Cbc',
            'Wbc_count_cbc' => 'Wbc Count Cbc',
            'Eo_cbc' => 'Eo Cbc',
            'Urine_proteine_ua' => 'Urine Proteine Ua',
            'Urine_gluose_ua' => 'Urine Gluose Ua',
            'Rbc_ua' => 'Rbc Ua',
            'Wbc_ua' => 'Wbc Ua',
            'Parasite' => 'Parasite',
            'Occountblood' => 'Occountblood',
            'Dx_doctor' => 'รหัสแพทย์',
            'Dname' => 'แพทย์',
            'ic_confirm' => 'Ic Confirm',
            'ic_insys' => 'เข้าระบบ',
            'ic_report' => 'พบแพทย์',
        ];
    }
    public function getPtype(){
        return $this->hasOne(Pttype::className(), ['pttype'=>'Pttype']);
    }
    public function getPsmoke(){
        return $this->hasOne(SmokingType::className(), ['smoking_type_id'=>'Smoking_type_id']);
    }
    public function getPdrink(){
        return $this->hasOne(DrinkingType::className(), ['drinking_type_id'=>'Drinking_type_id']);
    }
    public function getBp1(){
        return $this->Bps.' / '.$this->Bpd;
    }
    
    public function getItemfbs0(){
        return $this->hasMany(Itemlab::className(), ['name'=>'Fbs']);
    }
}
