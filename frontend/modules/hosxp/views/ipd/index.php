<div class="panel panel-primary">
  <div class="panel-heading"><h4>รายงาน IPD โดย นายปริญญา ลอยพิมาย นวก.คอมพิวเตอร์ รพ.บึงกาฬ</h4></div>
  <div class="panel-body">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">               
                <p>
                    <?php
                        echo \yii\helpers\Html::a('<i class="fa fa-circle text-blue"></i> 1) ยอดจำหน่ายผู้ป่วย Sepsis IPD',
                                ['/hosxp/ipd/report_ipd1']);
                    ?>
                </p>    
                <p>
                    <?php
                        echo \yii\helpers\Html::a('<i class="fa fa-circle text-blue"></i> 2) ยอด Admit ผู้ป่วย IPD',
                                ['/hosxp/ipd/report_ipd2']);
                    ?>
                </p>
               
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">  
             
            </div>
        </div>
  </div>
</div>