<?php

namespace frontend\modules\bkhealth\models;

use Yii;

/**
 * This is the model class for table "inresult".
 *
 * @property string $Vstdate
 * @property string $Vn
 * @property string $Hn
 * @property string $Pt
 * @property string $Age_y
 * @property string $Bp
 * @property string $Bp1
 * @property string $Waist
 * @property string $Waist1
 * @property string $Bmi
 * @property string $Bmi1
 * @property string $Fbs
 * @property string $Fbs1
 * @property string $Tg
 * @property string $Tg1
 * @property string $Hdl
 * @property string $Hd1
 * @property string $Bun
 * @property string $Bun1
 * @property string $Creatinine
 * @property string $Creatinine1
 * @property string $Ldl
 * @property string $Ldl1
 * @property string $Ast
 * @property string $Ast1
 * @property string $Alt
 * @property string $Alt1
 * @property string $Cholesterol
 * @property string $Cholesterol1
 * @property string $Gfr_ckd
 * @property string $Gfr_ckd1
 * @property string $Hct_cbc
 * @property string $Hct_cbc1
 * @property string $Wbc_count_cbc
 * @property string $Wbc_count_cbc1
 * @property string $Eo_cbc
 * @property string $Eo_cbc1
 * @property string $Urine_proteine_ua
 * @property string $Urine_proteine_ua1
 * @property string $Urine_gluose_ua
 * @property string $Urine_gluose_ua1
 * @property string $Rbc_ua
 * @property string $Rbc_ua1
 * @property string $Wbc_ua
 * @property string $Wbc_ua1
 * @property string $Parasite
 * @property string $Parasite1
 * @property string $Occountblood
 * @property string $Occountblood1
 * @property string $Uric
 * @property string $Uric1
 * @property integer $ic_confirm
 * @property integer $ic_insys
 * @property integer $ic_report
 */
class Inresult extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inresult';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vn'], 'required'],
            [['ic_confirm', 'ic_insys', 'ic_report'], 'integer'],
            [['Vstdate', 'Vn', 'Hn', 'Pt', 'Age_y','Cc' ,'Bp', 'Waist', 'Bmi', 'Fbs', 'Tg', 'Hdl', 'Bun', 'Bun1', 'Creatinine', 'Ldl', 'Ast', 'Ast1', 'Alt', 'Alt1', 'Cholesterol', 'Gfr_ckd', 'Hct_cbc', 'Wbc_count_cbc', 'Eo_cbc', 'Urine_proteine_ua', 'Urine_gluose_ua', 'Rbc_ua', 'Wbc_ua', 'Parasite', 'Occountblood', 'Uric','Sex'], 'string', 'max' => 255],
            [['Bp1', 'Waist1', 'Bmi1', 'Fbs1', 'Tg1', 'Hdl1', 'Creatinine1', 'Ldl1', 'Cholesterol1', 'Gfr_ckd1', 'Hct_cbc1', 'Wbc_count_cbc1', 'Eo_cbc1', 'Urine_proteine_ua1', 'Urine_gluose_ua1', 'Rbc_ua1', 'Wbc_ua1', 'Parasite1', 'Occountblood1', 'Uric1'], 'string', 'max' => 20],
            [['Cid'],'string', 'max' => 13]
            ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Vstdate' => 'Vstdate',
            'Cid'=>'Cid',
            'Vn' => 'Vn',
            'Hn' => 'Hn',
            'Pt' => 'Pt',
            'Age_y' => 'Age Y',
            'Bp' => 'Bp',
            'Bp1' => 'Bp1',
            'Waist' => 'Waist',
            'Waist1' => 'Waist1',
            'Bmi' => 'Bmi',
            'Bmi1' => 'Bmi1',
            'Fbs' => 'Fbs',
            'Fbs1' => 'Fbs1',
            'Tg' => 'Tg',
            'Tg1' => 'Tg1',
            'Hdl' => 'Hdl',
            'Hdl1' => 'Hdl1',
            'Bun' => 'Bun',
            'Bun1' => 'Bun1',
            'Creatinine' => 'Creatinine',
            'Creatinine1' => 'Creatinine1',
            'Ldl' => 'Ldl',
            'Ldl1' => 'Ldl1',
            'Ast' => 'Ast',
            'Ast1' => 'Ast1',
            'Alt' => 'Alt',
            'Alt1' => 'Alt1',
            'Cholesterol' => 'Cholesterol',
            'Cholesterol1' => 'Cholesterol1',
            'Gfr_ckd' => 'Gfr Ckd',
            'Gfr_ckd1' => 'Gfr Ckd1',
            'Hct_cbc' => 'Hct Cbc',
            'Hct_cbc1' => 'Hct Cbc1',
            'Wbc_count_cbc' => 'Wbc Count Cbc',
            'Wbc_count_cbc1' => 'Wbc Count Cbc1',
            'Eo_cbc' => 'Eo Cbc',
            'Eo_cbc1' => 'Eo Cbc1',
            'Urine_proteine_ua' => 'Urine Proteine Ua',
            'Urine_proteine_ua1' => 'Urine Proteine Ua1',
            'Urine_gluose_ua' => 'Urine Gluose Ua',
            'Urine_gluose_ua1' => 'Urine Gluose Ua1',
            'Rbc_ua' => 'Rbc Ua',
            'Rbc_ua1' => 'Rbc Ua1',
            'Wbc_ua' => 'Wbc Ua',
            'Wbc_ua1' => 'Wbc Ua1',
            'Parasite' => 'Parasite',
            'Parasite1' => 'Parasite1',
            'Occountblood' => 'Occountblood',
            'Occountblood1' => 'Occountblood1',
            'Uric' => 'Uric',
            'Uric1' => 'Uric1',
            'ic_confirm' => 'Ic Confirm',
            'ic_insys' => 'Ic Insys',
            'ic_report' => 'Ic Report',
        ];
    }
    
    public function getInsyses(){
        return $this->hasOne(Insys::className(), ['Vn'=>'Vn']);
    }
    
    public function getInbmi(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Bmi1']);
    }
    public function getInwaist(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Waist1']);
    }
    public function getInfbs(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Fbs1']);
    }
    public function getInbp(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Bp1']);
    }
    public function getIncho(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Cholesterol1']);
    }    
    public function getInldl(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Ldl1']);
    }
    public function getInhdl(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Hdl1']);
    }
    public function getIntg(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Tg1']);
    }
    public function getInuric(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Uric1']);
    }
    public function getInbun(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Bun1']);
    }    
    public function getIncr(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Creatinine1']);
    }
    public function getInpro(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Urine_proteine_ua1']);
    }
    public function getInsugar(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Urine_gluose_ua1']);
    }
    public function getInast(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Ast1']);
    }
    public function getInalt(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Alt1']);
    }
    public function getInpara(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Parasite1']);
    }
    public function getInocco(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Occountblood1']);
    }
    
    public function getInrbcua(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Rbc_ua1']);
    }
    public function getInwbcua(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Wbc_ua1']);
    }
//    public function getInalk(){
//        return $this->hasOne(Resultlab::className(), ['code'=>'Alk1']);
//    }
    public function getInhct(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Hct_cbc1']);
    }
    public function getInwbccbc(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Wbc_count_cbc1']);
    }
    public function getIneo(){
        return $this->hasOne(Resultlab::className(), ['code'=>'Eo_cbc1']);
    }
   public function getItemfbs1(){
        return $this->hasMany(Itemlab::className(), ['name'=>'Fbs']);
    }
    
}
