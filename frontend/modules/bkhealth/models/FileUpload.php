<?php

namespace frontend\modules\bkhealth\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "file_upload".
 *
 * @property integer $id
 * @property string $debit_file
 * @property string $detail_file
 * @property string $upload_date
 */
class FileUpload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $upload_folder = 'uploads';
    public static function tableName()
    {
        return 'file_upload';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detail_file'], 'string'],
            [['upload_date'], 'safe'],
            [['debit_file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'debit_file' => 'Debit File',
            'detail_file' => 'Detail File',
            'upload_date' => 'วันเวลาอับโหลด',
        ];
    }
public function upload($model,$attribute)
{
    $debit_file  = UploadedFile::getInstance($model, $attribute);
      $path = $this->getUploadPath();
    if ($this->validate() && $debit_file !== null) {

        //$fileName = md5($debit_file->baseName.time()) . '.' . $debit_file->extension;
        $fileName = $debit_file->baseName . '.' . $debit_file->extension;
        if($debit_file->saveAs($path.$fileName)){
          return $fileName;
        }
    }
    return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
}

public function getUploadPath(){
  return Yii::getAlias('@webroot').'/'.$this->upload_folder.'/';
}

public function getUploadUrl(){
  return Yii::getAlias('@web').'/'.$this->upload_folder.'/';
}

public function getPhotoViewer(){
  return empty($this->debit_file) ? Yii::getAlias('@web').'/img/none.png' : $this->getUploadUrl().$this->debit_file;
}
}

