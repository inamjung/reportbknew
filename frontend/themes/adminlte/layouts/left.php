
    


<aside class="main-sidebar">
    <div style="margin-top:230px;">

    <section class="sidebar">

        <!-- Sidebar user panel -->
<!--        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>-->
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
//                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    ['label' => 'ล็อคอิน', 'url' => ['/user/security/login'], 'visible' => Yii::$app->user->isGuest],
//                    [
//                        'label' => 'Same tools',
//                        'icon' => 'fa fa-share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
//                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'fa fa-circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'fa fa-circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
                ],
            ]
        ) ?>
        
        
<ul class="sidebar-menu">            
            <li class="treeview active">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"></i><span>รายงาน HOSxP</span>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo yii\helpers\Url::to(['/hosxp/ipd/index']);?>">
                                <i class="fa fa-circle text-blue"></i>
                                    <span>IPD -บึงกาฬ</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-green"></i>
                                    <span>OPD -บุ่งคล้า</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-orange"></i>
                                    <span>DENT -เซกา</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-red"></i>
                                        <span>RX | TTM -ศรีวิไล</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-yellow"></i>
                                    <span>PP -โซ่พิสัย</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-green"></i>
                                    <span>ER | ACC -ปากคาด</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-purple"></i>
                                    <span>LR -บึงโขงหลง</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-circle text-blue"></i>
                                    <span>NCD -พรเจริญ</span>
                            </a>
                        </li>
                    </ul>
            </li>
   </ul> 
<!--       <ul class="sidebar-menu">            
            <li class="treeview active">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"></i><span>ระบบเบิก</span>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo yii\helpers\Url::to(['/inven/invenmains/indexuser']);?>">
                                <i class="fa fa-circle text-red"></i>
                                    <span>เบิกของ</span>
                            </a>
                        </li>
    <?php if(!Yii::$app->user->isGuest) {?>    
                        
    <?php if(Yii::$app->user->identity->role == dektrium\user\models\User::ROLE_ADMIN) {?>                    
                        <li>
                            <a href="<?php echo yii\helpers\Url::to(['/inven/invenmains/index']);?>">
                                <i class="fa fa-circle text-red"></i>
                                    <span>ทะเบียนเบิกของ</span>
                            </a>
                        </li>
    <?php }?>  
    <?php }?> 
                        
                    </ul>
            </li>
   </ul> -->
        
            </li>
   </ul> 
    </section>
</div>
</aside>
